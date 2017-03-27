import React from 'react';
import {Link} from 'react-router-dom';

const logo_ict = require('../../../img/logo_ict.jpg');
const logo_apn = require('../../../img/logo-fnal-APN.jpg');
const logo_ctur = require('../../../img/logo_canatur.jpg');
const logo_acpt = require('../../../img/acoprot.jpg');
const Footer = () => (
    <footer>
        <div className="container-fluid main-footer">
            <div className="footer-bg-extra">
                <div className="container">
                    <div className="row">
                        <div className="col-md-6">
                            Tel.: (506) 2258 7878 Fax.: (506) 2258 2828.
                            <br/>After Hours.: (506) 8829 9674
                            <br/>Toll Free US & Canada: (305) 897-4808
                            <br/>Email: <a href="mailto:info@gogreencr.com">info@gogreencr.com</a>
                        </div>
                        <div className="col-md-6">
                            <ul className="list-inline text-right">
                                <li>
                                    Pages:
                                </li>
                                <li>
                                    <Link to="/home">Home</Link>
                                </li>
                                <li>
                                    <Link to="/about">About</Link>
                                </li>
                                <li>
                                    <Link to="/search">Search</Link>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div className="container-fluid social-footer">
            <div className="container">
                <div className="row">
                    <div className="col-md-6">
                        <ul className="list-inline">
                            <li className="social-facebook">
                                <a href="#"><i className="typcn typcn-social-facebook-circular"></i></a>
                            </li>
                            <li className="social-twitter">
                                <a href="https://twitter.com/vctingcr"><i className="typcn typcn-social-twitter-circular"></i></a>
                            </li>
                        </ul>
                        <p className="small text-muted">All rights reserved Costa Rica Travel and Vacations ® 2012</p>
                    </div>
                    <div className="col-md-6 colaborator-logos">
                        <p>Costa Rica Tourism:</p>
                        <ul className="list-inline">
                            <li>
                                <a href="https://twitter.com/vctingcr"><img src={logo_ict} alt=""/></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vctingcr"><img src={logo_apn} alt=""/></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vctingcr"><img src={logo_acpt} alt=""/></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/vctingcr"><img src={logo_ctur} alt=""/></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
);

export default Footer;