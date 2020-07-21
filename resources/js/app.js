require('./bootstrap');
// Make 'IOrder' accessible inside the HTML pages
import IOrder from "./iorder";
window.IOrder = IOrder;
// Run the hello() function
IOrder.hello();
