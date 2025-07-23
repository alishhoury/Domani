import React from "react";
import "./styles.css"

const Button = ({text, onClickListener }) => {
    return (

        <button className="primary-button" onClick={onClickListener}>
            {text}
        </button>
    );
};

export default Button;
