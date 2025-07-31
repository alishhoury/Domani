import React from "react";
import "./styles.css";

const Input = ({ name,type, hint, required,icon, onChangeListener, minLength,className }) => {

    return (
        <div className="input-container">
        {icon && <span className="input-icon">{icon}</span>}
        <input
        type={type}
        name={name}
        placeholder={hint}
        required={required}
        minLength={minLength}
        onChange={onChangeListener}
        className={`primary-input ${className || ''}`}
        />
        </div>
    );
};

export default Input;