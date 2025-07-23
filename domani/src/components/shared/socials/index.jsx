import React from "react";
import "./styles.css";

const SocialButtons = ({onFacebookLogin, onGoogleLogin}) => {
    return (
        <div className="social-buttons-container">
            <button 
                className="social-button facebook-button" 
                onClick={onFacebookLogin}
                type="button">
                <img src="/assets/facebook.svg" alt="Facebook" width="24" height="24" />
            </button>

            <button 
                className="social-button google-button" 
                onClick={onGoogleLogin}
                type="button">
                <img src="/assets/google.svg" alt="Google" width="24" height="24" />
            </button>
        </div>
    )
}

export default SocialButtons;