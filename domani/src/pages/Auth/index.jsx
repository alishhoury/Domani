import React, { useState } from "react";
import SignUpPage from "../../components/auth/SignUpForm";
import LoginPage from "../../components/auth/LoginForm";




const Auth = ({}) =>{
      const [isLogin, setIsLogin] = useState(true);
        const switchForm = () => {
    setIsLogin(!isLogin);
  };
  return (
    <div className="auth-page">
        {isLogin ? (
          <LoginPage toggle={switchForm} />
        ) : (
          <SignUpPage toggle={switchForm} />
        )}
    </div>
  );
}
export default Auth;