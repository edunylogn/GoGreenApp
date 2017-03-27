import React from 'react';
import {Link} from 'react-router-dom';
const TopMenu = () => (
    <nav className="navbar navbar-default navbar-fixed-top" role="navigation">
        <div className="container">
            <div className="navbar-header">
                <button type="button" className="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span className="sr-only">Toggle navigation</span>
                    <span className="icon-bar"></span>
                    <span className="icon-bar"></span>
                    <span className="icon-bar"></span>
                </button>
                <a className="navbar-brand" href="#">
                    <div className="brand-logo"></div>
                </a>
            </div>
            <div className="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul className="nav navbar-nav navbar-right">
                    <li>
                        <Link to="/hotels"><i className="fa fa-bed fa-fw"></i> Hotels</Link>
                    </li>
                    <li>
                        <Link to="/tours"><i className="fa fa-wpexplorer fa-fw"></i> Tours</Link>
                    </li>
                    <li>
                        <Link to="/transport"><i className="fa fa-ship fa-fw"></i> Transport</Link>
                    </li>
                    <li>
                        <Link to="/packages"><i className="fa fa-briefcase fa-fw"></i> Packages</Link>
                    </li>
                    <li>
                        <Link to="/about"><i className="fa fa-info fa-fw"></i></Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
);

export default TopMenu;