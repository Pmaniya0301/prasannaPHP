</div>
</div>
<div class="m-5"></div>
<script src="<?php echo SITE_URL; ?>/lib/js/main.js"></script>
</div>
</div>
<script>
    const URL_SITE = window.location.pathname;
    let curruntPath = URL_SITE.split('/');
    let n = curruntPath.length;
    if ((/^Day/.test(curruntPath[n - 3]))) {
        document.getElementById('dayPractice').innerHTML = `${curruntPath[n-3]} &nbsp; ${curruntPath[n-2]}`;
        let idOfDay = curruntPath[n - 3].toLowerCase();
        let idOfAssignment = curruntPath[n - 3] + curruntPath[n - 2];
        // console.log(idOfAssignment);
        let element = document.getElementById(idOfDay);
        element.classList.add('show');
        let assignmentElement = document.getElementById(idOfAssignment);
        assignmentElement.className = 'bg-secondary font-weight-bold';

    }
</script>
</body>

</html>