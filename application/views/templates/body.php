<body>
        <?php $this->load->view('templates/header'); ?>
        <div id="contents">
            <?php $this->load->view('pages/'.$page); ?>
        </div>
        <?php  $this->load->view('templates/foot'); ?>
</body>
