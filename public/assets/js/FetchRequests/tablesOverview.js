const noOfTables = 12;
const tableStatusVals = {"0":"Order Pending", 1:"Order Preparing", null:"None"};
const tableStatusColors = {"0":'#037AFF', 1:'#1BC657', null:'#50515A'};

let tableCardsList = document.querySelectorAll(".table-card");

fetchTableData().then(fetchedData => loadData(fetchedData));
let dynamicLoad = setInterval(() => {
    fetchTableData().then(fetchedData => loadData(fetchedData));
}, 5000);

async function fetchTableData(){
    let data = await fetch(`http://localhost:8000/getTableOverviewData`)
    let tableData = await data.json();


    
    let allTables =  new Map();
    
    for (let tId = 1; tId <= noOfTables; tId++) {
        allTables[tId] = {
            "order_id": null,
            "status": null
        };
    }

    tableData.forEach(table => {
        allTables[table.table_id].order_id = table.order_id;
        allTables[table.table_id].status = table.status;
    });

    return allTables;
}

async function loadData(fetchedData){
    for (let tId = 1; tId <= noOfTables; tId++) {
        let tableCard = tableCardsList[tId-1];
        let orderId = tableCard.querySelector('.order-id');
        let tableStatus = tableCard.querySelector('.card-status');
        let tableStatusBox = tableCard.querySelector('.status-box');

        orderId.innerHTML = fetchedData[tId].order_id;      
        tableStatus.innerHTML = tableStatusVals[fetchedData[tId].status];
        tableStatusBox.style.backgroundColor = tableStatusColors[fetchedData[tId].status];
        if(fetchedData[tId].order_id != null){
            tableCard.setAttribute("onclick", `directToOrderMoreInfo(${fetchedData[tId].order_id},${tId})`);
        }
    }
}

function directToOrderMoreInfo(orderID,tId) {
    window.location.assign(`http://127.0.0.1:8000/showorders/${orderID}/${tId}`);
}
