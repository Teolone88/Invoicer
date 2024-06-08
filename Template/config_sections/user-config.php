<div class="table-responsive">
    <table id="UserTable" class="support-table user-table table-center">
        <thead class="">
            <tr class="support-table-row">
                <th class="support-table-title border-bottom-thick text-center" colspan="4" scope="col">
                    <?= $this->helper->supportHelper->embedSVGIcon('user-icon') ?> </i> <?= t('User Configuration') ?>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="support-table-row">
                <td class="cell-title"><?= t('Your Profile Full Name') ?></td>
                <td class="cell-value value-name">
                    <?= $this->url->link($this->user->getFullname(), 'UserViewController', 'show', array('user_id' => $this->user->getId()), false, 'user-profile-link', t('View Profile')) ?>
                </td>
                <td class="cell-title"><?= t('Your User ID') ?></td>
                <td class="cell-value value"><?= $this->user->getId() ?></td>
            </tr>
            <tr class="support-table-row">
                <td class="cell-title"><?= t('Your Role') ?></td>
                <td class="cell-value" colspan="3"><?= $this->user->getRoleName() ?></td>
            </tr>
            <tr class="support-table-row">
                <td class="cell-title"><?= t('Your IP Address') ?></td>
                <td class="cell-value value-ip" colspan="3">
                    <?php if ($this->user->isAdmin()): ?>
                        <span class="privacy"><?= $_SERVER['REMOTE_ADDR'] ?></span>
                        <a id="valueBTN" href="https://www.whois.com/whois/<?= $_SERVER['REMOTE_ADDR'] ?>" class="value-btn privacy-delete" target="_blank" rel="noopener noreferrer" title="<?= t('Opens in a new window') ?> &#8663;">
                            <i class="fa fa-external-link"></i> <?= t('Lookup IP') ?>
                        </a>
                    <?php else: ?>
                        <?= $this->helper->supportHelper->maskIPAddress($_SERVER['REMOTE_ADDR']) ?>
                    <?php endif ?>
                </td>
            </tr>
            <tr class="support-table-row">
                <td class="cell-title"><?= t('Current Page') ?></td>
                <td class="cell-value value-url privacy privacy-margin" colspan="3"><?= $_SERVER['SCRIPT_URI'] ?></td>
            </tr>
            <tr class="support-table-row">
                <td class="cell-title"><?= t('Your Browser Name') ?></td>
                <td class="cell-value" colspan="3"><?= $this->helper->supportHelper->getBrowser() ?></td>
            </tr>
            <tr class="support-table-row">
                <td class="cell-title"><?= t('Your Browser') ?></td>
                <td class="cell-value" colspan="3"><?= $this->text->e($user_agent) ?></td>
            </tr>
        </tbody>
    </table>
</div>
