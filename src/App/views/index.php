<p><?php echo $test; ?></p>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.1/axios.min.js"></script>
<script type="module">
    axios.post("d", {
        name: JSON.stringify({
            'dasd': 'dsa',
            'da': 'dddd'
        })
    }).then(function(response) {
        console.log(response)
        // do whatever you want if console is [object object] then stringify the response
    })
</script>