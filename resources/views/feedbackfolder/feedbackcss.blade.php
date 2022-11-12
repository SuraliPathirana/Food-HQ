/*!
 * bootstrap-star-rating v4.0.2
 * http://plugins.krajee.com/star-rating
 *
 * Author: Kartik Visweswaran
 * Copyright: 2013 - 2017, Kartik Visweswaran, Krajee.com
 *
 * Licensed under the BSD 3-Clause
 * https://github.com/kartik-v/bootstrap-star-rating/blob/master/LICENSE.md
 */
.rating-loading {
    width: 25px;
    height: 25px;
    font-size: 0;
    color: #fff;
    background: url(../img/loading.gif) top left no-repeat;
    border: none
}

.rating-container .rating-stars {
    position: relative;
    cursor: pointer;
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap
}

.rating-container .rating-input {
    position: absolute;
    cursor: pointer;
    width: 100%;
    height: 1px;
    bottom: 0;
    left: 0;
    font-size: 1px;
    border: none;
    background: 0 0;
    padding: 0;
    margin: 0
}

.rating-disabled .rating-input,
.rating-disabled .rating-stars {
    cursor: not-allowed
}

.rating-container .star {
    display: inline-block;
    margin: 0 3px;
    text-align: center
}

.rating-container .empty-stars {
    color: #aaa
}

.rating-container .filled-stars {
    position: absolute;
    left: 0;
    top: 0;
    margin: auto;
    color: #fde16d;
    white-space: nowrap;
    overflow: hidden;
    -webkit-text-stroke: 1px #777;
    text-shadow: 1px 1px #999
}

.rating-rtl {
    float: right
}

.rating-animate .filled-stars {
    transition: width .25s ease;
    -o-transition: width .25s ease;
    -moz-transition: width .25s ease;
    -webkit-transition: width .25s ease
}

.rating-rtl .filled-stars {
    left: auto;
    right: 0;
    -moz-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    -webkit-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    -o-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0)
}

.rating-rtl.is-star .filled-stars {
    right: .06em
}

.rating-rtl.is-heart .empty-stars {
    margin-right: .07em
}

.rating-lg {
    font-size: 3.91em
}

.rating-md {
    font-size: 3.13em
}

.rating-sm {
    font-size: 2.5em
}

.rating-xs {
    font-size: 2em
}

.rating-xl {
    font-size: 4.89em
}

.rating-container .clear-rating {
    color: #aaa;
    cursor: not-allowed;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
    padding-right: 5px
}

.clear-rating-active {
    cursor: pointer !important
}

.clear-rating-active:hover {
    color: #843534
}

.rating-container .caption {
    color: #999;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
    margin-top: -.6em;
    margin-left: 5px;
    margin-right: 0
}

.rating-rtl .caption {
    margin-right: 5px;
    margin-left: 0
}

@media print {
    .rating-container .clear-rating {
        display: none
    }
}