import { useState } from "react"

function ComponentState(props) {
    const [count, setCount] = useState(0);
    return <button onClick={() => setCount(count + 1)}>Ciao {count}</button>
}

export default ComponentState;

