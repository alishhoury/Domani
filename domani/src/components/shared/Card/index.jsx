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
}) => {
  const mediaUrl = media_path
    ? (media_path.startsWith('http')
        ? media_path
        : `http://127.0.0.1:8000/storage/${media_path}`)
    : null;

  return (
    <div className="card">
      <div className="card-header">
        <span className="card-country">{countryName}</span>
        <span className="card-user">{name ?? 'Unknown User'}</span>
      </div>
      {mediaUrl && (
        media_type === 'audio'
          ? <audio controls src={mediaUrl} className="card-media" />
          : <img src={mediaUrl} alt={message} className="card-media" />
      )}
      <div className="card-message">{message}</div>
      <div className="card-date">{new Date(created_at).toLocaleString()}</div>
    </div>
  );
};

export default Card;
