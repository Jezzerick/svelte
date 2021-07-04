<script>

    let skills = [
        {name: 'PHP', progress: '70'},
        {name: 'HTML', progress: '80'},
        {name: 'CSS', progress: '70'},
        {name: 'SVELTE', progress: '60'},
        {name: 'VUE', progress: '50'},
        {name: 'MySQL', progress: '60'},
        {name: 'Javascript', progress: '60'},
        {name: 'PHOTOSHOP', progress: '60'},
    ]

</script>

<div class="text-center p-4">
    <h1 class="text-2xl font-bold uppercase">Abilities</h1>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 px-10">
    {#each skills as skill}
        <div class="relative pt-1">
            <div class="flex mb-2 items-center justify-between">
            <div>
                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full">
                {skill.name}
                </span>
            </div>
            </div>
            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
            <div style="width:{skill.progress}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-gray-500"></div>
            </div>
        </div>
    {/each}
</div>
