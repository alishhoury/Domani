import React from 'react';
import './styles.css';

const Card = ({
  capsule: {
    countryName = 'Unknown Country',
    user: { name } = {},
    media_type,
    media_path,
    message,
    created_at,
  },
}) => (
  <div className="card">
    <div className="card-header">
      <span className="card-country">{countryName}</span>
      <span className="card-user">{name ?? 'Unknown User'}</span>
    </div>
    {media_path && (
      media_type === 'audio'
        ? <audio controls src={media_path} className="card-media" />
        : <img src={media_path} alt={message} className="card-media" />
    )}
    <div className="card-message">{message}</div>
    <div className="card-date">{new Date(created_at).toLocaleString()}</div>
  </div>
);

export default Card;
