import React                            from 'react';
import { Provider }                     from 'react-redux';
import {BrowserRouter as Router, Route} from 'react-router-dom';
import configureStore                   from './store/configureStore';
import TopMenu                          from './components/Presentation/TopMenu';
import Footer                           from './components/Presentation/Footer';
import Home                             from './containers/Home';
import About                            from './containers/About';
import Hotels                           from './containers/Hotels';
import Hotel                            from './containers/Hotel';
import Tours                            from './containers/Tours';
import Transport                        from './containers/Transport';
import Packages                         from './containers/Packages';
import Package                          from './containers/Package';

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

const store = configureStore();

store.dispatch(loadHotels());

const App = () => (
    <Provider store={store}>
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
    </Provider>
)
export default App;