<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AibaAlbum</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../stylesSubpage.css">
    <link rel="stylesheet" href="../responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="../images/favicon.png">
</head>
<body>
<header>
        <div class="header-width">
        <a class="header-navigation" href="../AibaAlbumDesign.html"><img src="../images/logo.png" alt="AibaAlbumDesign"></a>
            <nav>
                <ul class="main-navigation">
                    <li><a href="../AibaAlbumDesign.html">&emsp;&emsp;ホーム&emsp;&emsp;</a></li><!--
                    --><li><a href="AibaPromotion.html">&nbsp;キャンペーン&nbsp;</a></li><!--
                    --><li><a href="AibaServicesFee.html">サービス・料金</a></li><!--
                    --><li><a href="AibaContact.html">&nbsp;お問い合わせ&nbsp;</a></li>
                </ul>
            </nav>
            <a class="application-btn" href="application.html">お申込み</a>
        </div>
        <div class="responsive-right">
            <div class="responsive-box">
                <button type="button" class="menu-btn">
                        MENU
                </button>
                <nav class="menu-btn-child">
                    <ul>
                        <li><a class="child-nav" href="../AibaAlbumDesign.html">ホーム</a></li>
                        <li><a class="child-nav" href="AibaPromotion.html">キャンペーン</a></li>
                        <li><a class="child-nav" href="AibaServicesFee.html">サービス・料金</a></li>
                        <li><a class="child-nav" href="AibaContact.html">お問い合わせ</a></li>
                        <li><a class="button" href="application.html">お申込み</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
        <main>
            <section id="php-confirmation" class="php-confirmation">
                    <div class="confirmation-message">
                        <p>以下のご内容でご注文を承りました。</p>
                        <p>ご確認ください。</p>
                    </div>
    
                    <div class="confirmation">
                        <div class="postName">
                            <p class="post-title">お名前:</p>
                            <p><?php echo $_POST["last-name"].$_POST["first-name"] ?></p>
                        </div>
                        <div class="postNameFurigana">
                            <p class="post-title">お名前（フリガナ）:</p>
                            <p><?php echo $_POST["last-furigana"].$_POST["first-furigana"] ?></p>
                        </div>
                        <div class="postAddress">
                            <p class="post-title">ご住所:</p>
                            <p>郵便番号:<?php echo $_POST["post-code"] ?></p>
                            <p><?php echo $_POST["prefecture"].$_POST["customer-address-2"].$_POST["customer-address-3"] ?></p>
                        </div>
                        <div class="telephoneNumber">
                            <p class="post-title">電話番号:</p>
                            <p><?php echo $_POST["telephoneNumber"] ?></p>
                        </div>
                        <div class="customer-email">
                            <p class="post-title">メールアドレス:</p>
                            <p><?php echo $_POST["customer-email"] ?></p>
                        </div>
                        
                        <div class="deadline-plan-select">
                            <p class="post-title">お申し込みのプラン:</p>
                            <?php $plan = $_POST['plan'];?>
                            <?php if ($plan == 'aiba') :?>
                                <p>Aibaプラン</p>
                            <?php elseif ($plan == 'hurry'): ?>
                                <p>お急ぎプラン</p>
                            <? else :?>
                                <p>不明なプランが選択されました</p>
                            <?php endif; ?>
                        </div>

                        <div class="kit-select">
                            <p class="post-title">発送キットは利用しますか？:</p>
                            <?php $kitsSelect = $_POST['kitsSelect'];?>
                            <?php if ($kitsSelect == 'use') :?>
                                <p>利用する</p>
                            <?php elseif ($kitsSelect == 'noUse'): ?>
                                <p>利用しない</p>
                            <? else :?>
                                <p>不明なプランが選択されました</p>
                            <?php endif; ?>
                        </div>

                        <div class="shipping-kit-option">
                            <p class="post-title">大サイズ:</p>
                            <p><?php echo $_POST["shipping-kit-option-big"] ?></p>
                            <p class="post-title">中サイズ:</p>
                            <p><?php echo $_POST["shipping-kit-option-medium"] ?></p>
                        </div>

                        <div class="coupon-code">
                            <p class="post-title">クーポンコード：</p>
                            <p><?php echo $_POST["information-coupon"] ?></p>
                        </div>

                        
                    </div>
            </section>     
        </main>
    <footer>
        <nav class="footer-main-nav">
            <ul>
                <li><a href="AibaContact.html">お問い合わせ</a></li>
                <li><a href="CompanyOverview.html">会社概要</a></li>
                <li><a href="TearmsOfUse.html">ご利用規約</a></li>
                <li><a href="PrivacyPolicy.html">プライバシーポリシー</a></li>
                <li><a href="SpecifiedCommercialTransactionAct.html">特定商取引法に基づく表示</a></li>
            </ul>
        </nav>
        <nav class="footer-responsive-nav">
            <ul>
                <li><a href="AibaContact.html">お問い合わせ</a></li>
                <li><a href="CompanyOverview.html">会社概要</a></li>
                <li><a href="TearmsOfUse.html">ご利用規約</a></li>
            </ul>
            <ul>
                <li><a href="PrivacyPolicy.html">プライバシーポリシー</a></li>
                <li><a href="SpecifiedCommercialTransactionAct.html">特定商取引法に基づく表示</a></li>
            </ul>
        </nav>
        <p>&copy; 2025 AibaAlbum</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>