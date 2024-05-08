function ButtonNumero(props){
    const nuovaClasseCss = props.className === "" || props.className === null || props.className === undefined ? "btn-numero" : props.className;
    return <button onClick={props.onClickNumero} className={nuovaClasseCss}>{props.valore}</button>
}

export default ButtonNumero;