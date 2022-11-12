

//Required for data loading

const statusColors={
    1:'#FFA500',//to be confirmed-orange
    2:'#FFFF00',//confirmed-to be served
    3:'#00FF00',//free table-served table

};



//-----------------------------------------------

let CardsList = document.querySelectorAll("card shadow");


initLoad();

async function initLoad() {
    await getTableData();
    //await arrowClick(0);
}


//function to get the table data from fetch request
async function getTableData(){
    

    await fetch(`http://localhost:80/beauty-craft/Reservations/getTableOverviewData`)   //change the fetch address
        .then(response => response.json())
        .then(TableData => {
            console.log(TableData);
            // loadSProviders(reservationData); //do i needd this?
            loadData(TableData);
        })
}

//function to traverse the received data for each table
function loadTableData(reservationData){
    let x=0;
    while(x<12){
        let tableData= reservationData[x];
        let tableID=reservationData[x][5];
        let orderID=reservationData[x][0];
        let confirmed=reservationData[x][3];
        let served=reservationData[x][4];

        if(confirmed!=1){
            let newCard=createOrderPlaced(tableId, orderId);
            console.log(newCard);


        }

        if(confirmed==1 && served==0){
            let newCard=createOrderConfirmed(tableId, orderId);
            console.log(newCard);
        }

        //change this part
        // let resBox = createResBox(resStatus, resSlot[0], resSlot[1], sName, numToAlph[i + 1], reservationID, x);
        //         console.log(resBox);
        //         sProvColumnsList[sProvIndex].appendChild(resBox);

        x++;
        
    }
}


//function to create the "order placed view" in the cards
function createOrderPlaced(table_id,order_id){

    //change colour????
    

    let detailsButton = document.createElement("button");
    detailsButton.innerHTML = "View Details";
    detailsButton.onclick = "window.location.href='https://www.w3docs.com';"
     

    document.body.appendChild(detailsButton);


    let confirmButton = document.createElement("button");
    confirmButton.innerHTML = "Confirm Order";
    confirmButton.onclick = function () {

    //change this to amend the state of the order in the database    
            alert("Button is clicked");
    };

    document.body.appendChild(confirmButton);


} 

//function for the "order confirmed view" in the cards
function createOrderConfirmed(table_id,order_id){

    let detailsButton = document.createElement("button");
    detailsButton.innerHTML = "View Details";
    detailsButton.onclick = "window.location.href='https://www.w3docs.com';"
     

    document.body.appendChild(detailsButton);


    let servedButton = document.createElement("button");
    servedButton.innerHTML = "Order Served";
    servedButton.onclick = function () {

    //change this to amend the state of the order in the database    
            alert("Served Button is clicked");
    };

    document.body.appendChild(servedButton);

}

//is this needed???
function clearData() {
    let resBoxesList = document.querySelectorAll(".resBox");
    resBoxesList.forEach(resBox => {
        resBox.remove();
    });

    sProvHeadersList.forEach(element => {
        element.style.visibility = "hidden";
    });

    sProvColumnsList.forEach(element => {
        element.style.visibility = "hidden";
    });
}





// function request

// function loadSProviders(reservationData) {
    // let sProvIndex = 0;
    // for (let tableID in reservationData) {
    //     let tableData = reservationData[tableID];
        // let sProvName = sProvData[0];
        // let sProvImgPath = "http://localhost/beauty-craft/public/imgs/staffImgs/" + sProvData[2];

        // let imgContainer = sProvHeadersList[sProvIndex].querySelector('.header-profilepic');
        // imgContainer.setAttribute("src", sProvImgPath);

        // let nameSpan = sProvHeadersList[sProvIndex].querySelector('span');
        // nameSpan.textContent = sProvName;

        // sProvHeadersList[sProvIndex].style.visibility = "visible";
        // sProvColumnsList[sProvIndex].style.visibility = "visible";

        // imgContainer.style.visibility = "visible";
        // nameSpan.style.visibility = "visible";
//         sProvIndex++;
//     }
// }



function loadData(reservationData) {
    let x = 0;
    let sProvIndex = 0;
    for (let sProvID in reservationData) {
        let sProvData = reservationData[sProvID];
        //let sProvColumn = sProvColumnsList[sProvIndex];

        for (let reservationID in sProvData[1]) {
            // if (reservationID == "") break;
            let resData = sProvData[1][reservationID];
            let sName = resData['sName'];
            let resSlots = resData['slots'];
            let resStatus = resData['status'];
            for (let i = 0; i < resSlots.length; i++) {
                resSlot = resSlots[i];

                let resBox = createResBox(resStatus, resSlot[0], resSlot[1], sName, numToAlph[i + 1], reservationID, x);
                console.log(resBox);
                sProvColumnsList[sProvIndex].appendChild(resBox);
            }

            x++;
        }
        sProvIndex++;
    }
}

function clearData() {
    let resBoxesList = document.querySelectorAll(".resBox");
    resBoxesList.forEach(resBox => {
        resBox.remove();
    });

    sProvHeadersList.forEach(element => {
        element.style.visibility = "hidden";
    });

    sProvColumnsList.forEach(element => {
        element.style.visibility = "hidden";
    });
}






// Creates and returns a resData Box and load data to it.
function createResBox(status, startTime, duration, service, slotNo, resID, x) {

    let endTime = parseInt(startTime) + parseInt(duration);

    let resBox = document.createElement("div");
    resBox.style.top = (startTime - 540) * 2 + 'px';
    resBox.style.height = duration * 2 - 3 + 'px';
    resBox.classList.add("resBox");
    resBox.setAttribute("onclick", `directToResMoreInfo('${resID}')`);

    let resBoxInner = document.createElement("div");
    resBoxInner.classList.add("resBoxInner");
    resBox.appendChild(resBoxInner);

    let statusSection = document.createElement("div");
    statusSection.classList.add("statusSection");
    resBoxInner.appendChild(statusSection);
    statusSection.style.backgroundColor = statusColors[status];

    let infoSection = document.createElement("div");
    infoSection.classList.add("infoSection");
    resBoxInner.appendChild(infoSection);

    let timeSpan = document.createElement("span");
    timeSpan.classList.add("time");
    timeSpan.textContent = minsToTime(startTime) + ' - ' + minsToTime(endTime);
    infoSection.appendChild(timeSpan);

    let serviceSpan = document.createElement("span");
    serviceSpan.classList.add("service");
    serviceSpan.textContent = `${service}(${slotNo})`;
    infoSection.appendChild(serviceSpan);

    let idSection = document.createElement("div");
    idSection.classList.add("idSection");
    resBoxInner.appendChild(idSection);
    let resIDSpan = document.createElement("span");
    resIDSpan.classList.add("alphanumeric");
    resIDSpan.textContent = 'R' + resID;
    resIDSpan.style.color = resIDColours[x % 5];
    idSection.appendChild(resIDSpan);

    return resBox;
}



async function arrowClick(direction) {
    await updateArrowVisibility(direction);
    clearData();
    getReservationData();
}

// async function updateArrowVisibility(direction) {
//     switch (direction) {
//         case 1:
//             offset = (sProvCount - offset > 5) ? offset += 5 : offset;
//             break;

//         case 0:
//             offset = (offset > 0) ? offset -= 5 : offset;
//             break;
//         default:
//             break;
//     }

//     if (sProvCount - offset <= 5) {
//         rightArrow.style.visibility = "hidden";
//     } else {
//         rightArrow.style.visibility = "visible";
//     }
//     if (offset <= 0) {
//         leftArrow.style.visibility = "hidden";
//     } else {
//         leftArrow.style.visibility = "visible";
//     }
//     return;
// }

function directToResMoreInfo(reservationID) {
    window.location.assign(`http://localhost/beauty-craft/Reservations/reservationMoreInfo/${reservationID}`);
}

function minsToTime(timeInMins) {
    let hours24 = Math.floor(timeInMins / 60);
    let suffix = (hours24 >= 12) ? "PM" : "AM";
    let hours12 = (hours24 > 12) ? hours24 - 12 : hours24;
    let mins12 = timeInMins % 60;
    let time = hours12.toString().padStart(2, '0') + ':' + mins12.toString().padStart(2, '0') + suffix;
    return time;
}

function calendarUpdate(calendar) {
    console.log(calendar);
    pickedDate = calendar.value;
    clearData();
    getReservationData();
}