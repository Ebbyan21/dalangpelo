<!-- ========== CHARACTERS ========== -->
<?php
$json_data   = file_get_contents('data/characters.json');
$characters  = json_decode($json_data, true);

$card_styles = [
    'acil-card'   => 'background: linear-gradient(140deg, #2BB5F5, #0284C7);',
    'leri-card'   => 'background: linear-gradient(140deg, #A78BFA, #7C3AED);',
    'kane-card'   => 'background: linear-gradient(140deg, #FFD93D, #FFB100);',
    'gepeng-card' => 'background: linear-gradient(140deg, #8D5524, #5D4037);',
];

$img_bg_styles = [
    'acil-card'   => 'background: linear-gradient(135deg, #2BB5F5, #0284C7);',
    'leri-card'   => 'background: linear-gradient(135deg, #A78BFA, #7C3AED);',
    'kane-card'   => 'background: linear-gradient(135deg, #FFD93D, #FFA500);',
    'gepeng-card' => 'background: linear-gradient(135deg, #8D5524, #5D4037);',
];
?>

<section id="characters">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Kenali <span>Warga Dalang Pelo</span></h2>
            <p class="section-subtitle">Setiap karakter punya tingkat keabsurdan yang berbeda-beda!</p>
        </div>

        <div class="chars-slider-container">
            <button class="chars-arrow chars-arrow-left" aria-label="Prev">
                <i class="bi bi-chevron-left"></i>
            </button>

            <div class="chars-scroll-wrapper">
                <div class="chars-row">
                    <?php if (!empty($characters)) : ?>
                        <?php foreach ($characters as $char) :
                            $theme         = htmlspecialchars($char['theme']);
                            $card_style    = $card_styles[$char['theme']] ?? '';
                            $img_bg_style  = $img_bg_styles[$char['theme']] ?? '';
                        ?>
                            <div class="game-card <?php echo $theme; ?>" style="<?php echo $card_style; ?>">
                                <div class="card-inner">
                                    <div class="char-trait"><?php echo htmlspecialchars($char['trait']); ?></div>
                                    <div class="char-img-container" style="<?php echo $img_bg_style; ?>">
                                        <img src="<?php echo htmlspecialchars($char['img']); ?>"
                                             alt="<?php echo htmlspecialchars($char['name']); ?>"
                                             class="img-fluid"
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

            <button class="chars-arrow chars-arrow-right" aria-label="Next">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

    </div>
</section>