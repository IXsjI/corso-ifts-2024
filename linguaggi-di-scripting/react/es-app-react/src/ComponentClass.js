import React from "react";

class ComponentClass extends React.Component {
    render() {
        return <div>Ciao {this.props.nome}</div>;
    }
}

export default ComponentClass;