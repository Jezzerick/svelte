import App from "./components/App.svelte"


const app = new App({
    target: document.querySelector("#svelte-app")
})

window.app = app;

export default app;