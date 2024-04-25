import Helper from "../../helper/Helper";
import { Render } from "../../main";
import Button from "../../shared/Button";
import Input from "../../shared/Input";

export default (props) => {
  setTimeout(() => {
    Helper.DOM(".ok")[0].onclick = function (params) {
      window.data.state +=1 
     Render()
    };
  }, 0.000000000000001);
  return `<div class="relative  bg-white">
  ${window.data.state}
    <div class="flex flex-col justify-start items-center  gap-[19px]">
      <div
        class="flex flex-col justify-center items-end flex-grow-0 flex-shrink-0 relative overflow-hidden gap-[17px] bg-white"
      >
        <p class="flex-grow-0 flex-shrink-0 w-[35px] h-[15px] text-xs text-center text-[#0b0a0a]">
          نام
        </p>
        ${Input({
          name: "name",
          class:
            "flex-grow-0 flex-shrink-0 w-[266px] h-[33px] relative overflow-hidden bg-[#d7d7d7]",
        })}

      </div>
      <div
        class="flex flex-col justify-center items-end flex-grow-0 flex-shrink-0 relative overflow-hidden gap-[17px] bg-white"
      >
        <p class="flex-grow-0 flex-shrink-0 w-[35px] h-[15px] text-xs text-center text-[#060606]">
          ایمیل
        </p>
        ${Input({
          name: "email",
          class:
            "flex-grow-0 flex-shrink-0 w-[266px] h-[33px] relative overflow-hidden bg-[#d7d7d7]",
        })}
      </div>
      <div
        class="flex flex-col justify-center items-end flex-grow-0 flex-shrink-0 relative overflow-hidden gap-[17px] bg-white"
      >
        <p class="flex-grow-0 flex-shrink-0 w-[35px] h-[15px] text-xs text-center text-[#030303]">
          پسورد
        </p>
        ${Input({
          name: "password",
          class:
            "flex-grow-0 flex-shrink-0 w-[266px] h-[33px] relative overflow-hidden bg-[#d7d7d7]",
        })}
      </div>
      <!-- <div
        class="flex justify-center items-center flex-grow-0 flex-shrink-0 w-[102px] relative overflow-hidden gap-2.5 px-[27px] py-1.5 bg-[#b4fef9]"
      >
        <p class="flex-grow-0 flex-shrink-0 text-xs text-center text-black">ثبت</p>
      </div> -->
      ${Button({ name: "ثبت", class: "bg-[#b4fef9] ok", type: "submit" })}
    </div>
  </div>`;
};
