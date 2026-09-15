<!-- ========== CHARACTERS ========== -->
<?php
$json_data  = file_get_contents('data/characters.json');
$characters = json_decode($json_data, true);
?>

<section id="characters">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Kenali <span>Warga Dalang Pelo</span></h2>
            <p class="section-subtitle">Setiap karakter punya tingkat keabsurdan yang berbeda-beda!</p>
        </div>

        <div class="chars-slider-container">
            <button class="chars-arrow chars-arrow-left" aria-label="Karakter sebelumnya">
                <i class="bi bi-chevron-left"></i>
            </button>

            <div class="chars-scroll-wrapper">
                <div class="chars-row">
                    <?php if (!empty($characters)) : ?>
                        <?php foreach ($characters as $char) :
                            $theme = htmlspecialchars($char['theme']);
                        ?>
                            <div class="game-card <?php echo $theme; ?>"
                                 tabindex="0"
                                 role="button"
                                 aria-expanded="false"
                                 aria-label="<?php echo htmlspecialchars($char['name']); ?>, tekan Enter untuk lihat detail">
                                <div class="card-inner">
                                    <div class="char-trait"><?php echo htmlspecialchars($char['trait']); ?></div>
                                    <div class="char-img-container">
                                        <img src="<?php echo htmlspecialchars($char['img']); ?>"
                                             alt="<?php echo htmlspecialchars($char['name']); ?>"
                                             class="img-fluid"
                                             width="200" height="200"
                                             loading="lazy">
                                    </div>
                                    <div class="char-content">
                                        <h3 class="char-name"><?php echo htmlspecialchars($char['name']); ?></h3>
                                        <div class="char-info">
                                            <p><?php echo htmlspecialchars($char['desc']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <div class="text-center text-white w-100">
                            <p>Warga Dalang Pelo lagi pada tidur nih, coba balik lagi nanti!</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <button class="chars-arrow chars-arrow-right" aria-label="Karakter selanjutnya">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

    </div>
</section>