import React from 'react';
const Login = () => (
    <div className="login-container">
        <div className="row">
            <div className="col-xs-10 col-xs-offset-1">
                <form className="form-signin">
                    <h2 className="form-signin-heading">Please login</h2>
                    <input type="text" className="form-control" name="username" placeholder="Email Address" required="" autoFocus="" />
                    <input type="password" className="form-control" name="password" placeholder="Password" required=""/>
                    <div className="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"/> Remember me
                        </label>
                    </div>
                    <button className="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
);

export default Login;