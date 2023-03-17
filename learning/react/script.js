import React from "react";
import ReactDom from "react-dom";

class App extends React.Component {
    render() {
        return (
            <>
            <h3>My first React Project</h3>
            </>
        );
    }
}

const rootElem = document.getElementById("root");
ReactDom.render(<App />, rootElem);