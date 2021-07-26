<svelte:head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>Jerick Lontoc Portfolio</title>
    <meta name="description" content="I'm a Junior/Middleweight Web Developer based in Stoke-on-Trent.
    I'm a hardworking person and seeking to apply my skills and knowledge with my efforts.">
    <link rel="canonical" href="https://www.jericklontoc.co.uk">
    <script src="https://kit.fontawesome.com/2828f7885a.js"
    integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
    crossorigin="anonymous"></script>
</svelte:head>

<script>
    import Header from "./Header.svelte"
    import Profile from "./Profile.svelte"
    import Skills from "./Skills.svelte"
    import Work from "./Work.svelte"
    import Footer from "./Footer.svelte"
    import BackToTop from "./BackToTop.svelte"
    import SendMessage from "./Sendmessage.svelte"
    import DownloadCV from "./DownloadCV.svelte"
</script>


<Header/>

<Profile/>
    <div class="container mx-auto">
        <DownloadCV/>

        <Skills/>
        
        <Work/>
        
        <SendMessage/>
        
        <BackToTop />
    </div>
<Footer/>



