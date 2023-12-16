import "flowbite";
import { Input, Timepicker, initTE } from "tw-elements";
import "./bootstrap";
initTE({ Input, Timepicker });
const picker = document.querySelector("#timepicker-format");
const tpFormat24 = new te.Timepicker(picker, {
    format24: true,
});
const pickerMinTime = document.querySelector("#timepicker-min-time");
const timepickerMinTime = new te.Timepicker(pickerMinTime, {
    minTime: "10:15",
});
