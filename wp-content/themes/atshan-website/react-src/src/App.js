import React from "react";
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';


function App() {
    return (

        <React.Fragment>
            <Switch>
                <Route exact path="/" component={Home} />
                <Route exact path="/" component={About} />
                <Route exact path="/" component={Contact} />
                <Route exact path="/" component={Home} />
                <Route component={NoMatch} />
            </Switch>

        </React.Fragment>

    );
}


export default App;
