<?php include '../header_footer/header.php'; ?>
<div class="container">
    <h1>Artikel</h1>
    <ul class="nav nav-tabs" id="articleTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="mental-tab" data-toggle="tab" href="#mental" role="tab" aria-controls="mental" aria-selected="true">Mental</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="bacaanku-tab" data-toggle="tab" href="#bacaanku" role="tab" aria-controls="bacaanku" aria-selected="false">Bacaanku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="jiwaku-tab" data-toggle="tab" href="#jiwaku" role="tab" aria-controls="jiwaku" aria-selected="false">Jiwaku</a>
        </li>
    </ul>
    <div class="tab-content" id="articleTabContent">
        <div class="tab-pane fade show active" id="mental" role="tabpanel" aria-labelledby="mental-tab">
            <h2>Artikel Mental</h2>
            <!-- Tambahkan artikel mental di sini -->
        </div>
        <div class="tab-pane fade" id="bacaanku" role="tabpanel" aria-labelledby="bacaanku-tab">
            <h2>Bacaanku</h2>
            <!-- Tambahkan artikel bacaanku di sini -->
        </div>
        <div class="tab-pane fade" id="jiwaku" role="tabpanel" aria-labelledby="jiwaku-tab">
            <h2>Jiwaku</h2>
        <li><a href="mengenal_gangguan_jiwa.php"> Mengenal Gangguan Jiwa </a></li>
            
        </div>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
<?php include '../header_footer/footer.php'; ?>
