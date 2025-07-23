import React from "react";
import "./styles.css";

const Input = ({ name,type, hint, required, onChangeListener }) => {

    return (

        <input
        type={type}
        name={name}
        placeholder={hint}
        required={required}
        onChange={onChangeListener}
        className="primary-input"
        />

    );
};

export default Input;