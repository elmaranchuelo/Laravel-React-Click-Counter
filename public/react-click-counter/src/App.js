import React, { useEffect, useState } from 'react';
import './App.css';


function App() {
  const [count, setCount] = useState(0);

  useEffect(() => {
    fetch('http://127.0.0.1:8000/api/clicks')
      .then(response => response.json())
      .then(data => setCount(data.count))
      .catch(error => console.error(error));
  }, []);

  const handleClick = () => {
    fetch('http://127.0.0.1:8000/api/clicks', { method: 'POST' })
      .then(response => response.json())
      .then(data => setCount(data.count))
      .catch(error => console.error(error));
  };

  return (
    <div className="container">
      <h1>Click Counter</h1>
      <p className="click-counter">Number of clicks: {count}</p>
      <div className="button-container">
        <button className="button" onClick={handleClick}>
          Click Me!
        </button>
      </div>
    </div>
  );
}

export default App;