<body>
        <?php $this->load->view('templates/header'); ?>
        <div id="contents">
            <div id="center">
            <?php $this->load->view('pages/'.$page); ?>
            </div>
        </div>
        <?php  $this->load->view('templates/foot'); ?>
</body>
