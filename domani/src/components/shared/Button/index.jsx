import React from "react";
import "./styles.css"

const Button = ({text, onClickListener, className }) => {
    return (

        <button className={`primary-button ${className || ''}`} onClick={onClickListener}>
            {text}
        </button>
    );
};

export default Button;
