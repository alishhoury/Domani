import React from "react";
import "./styles.css";
import FacebookIcon from "../../../assets/facebook.svg";
import GoogleIcon from "../../../assets/google.svg";

const SocialButtons = ({onFacebookLogin, onGoogleLogin}) => {
    return (
        <div className="social-buttons-container">
            <button 
                className="social-button facebook-button" 
                onClick={onFacebookLogin}
                type="button">
                <img src={FacebookIcon} alt="Facebook" />
            </button>

            <button 
                className="social-button google-button" 
                onClick={onGoogleLogin}
                type="button">
                <img src={GoogleIcon} alt="Google" />
            </button>
        </div>
    )
}

export default SocialButtons;