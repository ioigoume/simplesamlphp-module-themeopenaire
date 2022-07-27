<?php

/**
 * Template which is shown when there is only a short interval since the user was last authenticated.
 *
 * Parameters:
 * - 'target': Target URL.
 * - 'params': Parameters which should be included in the request.
 *
 * @package SimpleSAMLphp
 */

$this->data['403_header'] = $this->t('{themevanilla:Authorize:403_header}');
$this->data['403_text'] = $this->t('{themevanilla:Authorize:403_text}');

if (array_key_exists('reject_msg', $this->data)) {
    if (isset($this->data['reject_msg'][$this->getLanguage()])) {
        $this->data['403_text'] = $this->data['reject_msg'][$this->getLanguage()];
    }
}
$this->includeAtTemplateBase('includes/header.php');
?>
<h2><?= $this->data['403_header'] ?></h2>
<p><?= $this->data['403_text'] ?></p>
<?php if (isset($this->data['logoutURL'])) : ?>
    <p><a href="<?= htmlspecialchars($this->data['logoutURL']) ?>"><?= $this->t('{status:logout}') ?></a></p>
<?php endif; ?>

<?php
$this->includeAtTemplateBase('includes/footer.php');
