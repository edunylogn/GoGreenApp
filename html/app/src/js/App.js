import React                            from 'react';
import {BrowserRouter as Router, Route} from 'react-router-dom';
import {TransitionMotion, spring}       from 'react-motion'
import TopMenu                          from './Components/Presentation/TopMenu';
import Footer                           from './Components/Presentation/Footer';
import Home                             from './Containers/Home';
import About                            from './Containers/About';
import Hotels                           from './Containers/Hotels';
import Hotel                            from './Containers/Hotel';
import Tours                            from './Containers/Tours';
import Transport                        from './Containers/Transport';
import Packages                         from './Containers/Packages';
import Package                          from './Containers/Package';

const routes = [
    { path: '/home',
        main: Home
    },
    { path: '/hotels',
        main: Hotels
    },
    { path: '/hotel',
        main: Hotel
    },
    { path: '/tours',
        main: Tours
    },
    { path: '/transport',
        main: Transport
    },
    { path: '/packages',
        main: Packages
    },
    { path: '/package',
        main: Package
    },
    { path: '/about',
        main: About
    }
]

const App = () => (
    <Router>
        <div>
            <TopMenu/>
            {routes.map((route, index) => (
                <Route key={index} path={route.path} component={route.main}/>
            ))}
            <Route exact path="/" render={() => (
                <Redirect to="/home"/>
              )}/>
            <Footer/>
        </div>
    </Router>
)
export default App;