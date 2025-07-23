import React from "react";
import "./styles.css";

const Input = ({ name,type, hint, required,icon, onChangeListener }) => {

    return (
        <div className="input-container">
        {icon && <span className="input-icon">{icon}</span>}
        <input
        type={type}
        name={name}
        placeholder={hint}
        required={required}
        onChange={onChangeListener}
        className="primary-input"
        />
        </div>
    );
};

export default Input;