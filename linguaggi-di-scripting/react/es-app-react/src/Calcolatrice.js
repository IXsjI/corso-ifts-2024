import Display from "./Display";
import ButtonReset from "./BtnReset";
import BtnOperazione from "./BtnOperazione";
import ButtonNumero from "./BtnNumero";
import ButtonUguale from "./BtnUguale";
import { useState } from "react";



function CalcolatriceApp(props) {
const [displayVal, setDisplayVal] = useState("0");

let onClickResetFn = function () {
    setDisplayVal("0");
}

let onClickNumeroFn = function(val){
    if (val === "." && displayVal.indexOf(".") > 0) {
    } else if (displayVal === "0" && val !== ".") {
        setDisplayVal(val);
    } else {
        setDisplayVal(displayVal + val);
    }
}

    return <div className="bg-calcolatrice">
        <Display valore={displayVal} />
        <div>
            <ButtonReset onClickNumero={() => onClickResetFn()}/>
            <BtnOperazione operazione="%"/>
            <BtnOperazione operazione="/"/>
        </div>
        <div>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("7")} valore="7"/>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("8")} valore="8"/>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("9")} valore="9"/>
            <BtnOperazione operazione="x"/>
        </div>
        <div>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("4")} valore="4"/>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("5")} valore="5"/>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("6")} valore="6"/>
            <BtnOperazione operazione="-"/>
        </div>
        <div>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("1")} valore="1"/>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("2")} valore="2"/>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("3")} valore="3"/>
            <BtnOperazione operazione="+"/>
        </div>
        <div>
            <ButtonNumero onClickNumero={() => onClickNumeroFn("0")} valore="0" className="btn-zero"/>
            <ButtonNumero onClickNumero={() => onClickNumeroFn(".")}valore="." className="btn-punto"/>
            <ButtonUguale/>
        </div>
    </div>
}

export default CalcolatriceApp;