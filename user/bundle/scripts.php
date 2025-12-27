<?php
$includeSweetAlert = $includeSweetAlert ?? false;
$includeNiceSelect = $includeNiceSelect ?? false;
$includeJqueryUi = $includeJqueryUi ?? false;
$includeTranslate = $includeTranslate ?? true;
$includeGoogleTranslate = $includeGoogleTranslate ?? $includeTranslate;
$includeApexCharts = $includeApexCharts ?? true;
$includeSlick = $includeSlick ?? true;
$includeLivePrices = $includeLivePrices ?? true;
$includeHaptics = $includeHaptics ?? true;
$includeQrcode = $includeQrcode ?? false;
$includeJsBarcode = $includeJsBarcode ?? false;
$pageModule = $pageModule ?? '';
$scriptCacheBust = $scriptCacheBust ?? time();

$appendCache = function ($path) use ($scriptCacheBust) {
    if (!$path) {
        return '';
    }
    return strpos($path, '?') === false ? $path . '?v=' . $scriptCacheBust : $path . '&v=' . $scriptCacheBust;
};
?>

<?php if ($includeSweetAlert): ?>
<script src="css/vendor/assets/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
<?php endif; ?>
<?php if ($includeNiceSelect): ?>
<script src="../assets/plugins/nice-select/jquery.nice-select.min.js"></script>
<?php endif; ?>
<?php if ($includeJqueryUi): ?>
<script src="css/vendor/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
<?php endif; ?>
<?php if ($includeTranslate): ?>
<script src="<?php echo($js)?>translate.js"></script>
<?php endif; ?>
<?php if ($includeGoogleTranslate): ?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php endif; ?>
<?php if ($includeApexCharts): ?>
<script src="../assets/plugins/apexcharts/apexcharts.min.js?v=<?php echo $scriptCacheBust; ?>"></script>
<?php endif; ?>
<?php if ($includeSlick): ?>
<script src="../assets/plugins/slick/slick.min.js?v=<?php echo $scriptCacheBust; ?>"></script>
<?php endif; ?>
<?php if ($includeLivePrices): ?>
<script src="<?php echo $appendCache($js . 'liveprices.js'); ?>"></script>
<?php endif; ?>
<?php if (!empty($pageModule)): ?>
<script type="module" defer src="<?php echo $appendCache($pageModule); ?>"></script>
<?php endif; ?>
<?php if ($includeQrcode): ?>
<script src="//cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<?php endif; ?>
<?php if ($includeJsBarcode): ?>
<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
<?php endif; ?>
<?php if ($includeHaptics): ?>
<script type="text/javascript" src="<?php echo $appendCache($js . 'haptics.js'); ?>"></script>
<?php endif; ?>
