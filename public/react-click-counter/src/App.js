import React, { useEffect, useState } from 'react';

function App() {
  const [count, setCount] = useState(0);

  return (
    <div>
      <h1>Click Counter</h1>
      <p>Number of clicks: {count}</p>
      <button>Click Me!</button>
    </div>
  );
}

export default App;
