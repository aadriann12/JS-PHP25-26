import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import HolaMundo from "./components/HolaMundo.jsx";
import App from './App.jsx'
createRoot(document.getElementById("root")).render(
<StrictMode>
{/* <App /> */}
<HolaMundo />
</StrictMode>
);

