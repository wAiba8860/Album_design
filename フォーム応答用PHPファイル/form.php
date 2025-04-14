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
                <ul>
                    <li><a href="../AibaAlbumDesign.html">ホーム</a></li>
                    <li><a href="AibaPromotion.html">キャンペーン</a></li>
                    <li><a href="AibaServicesFee.html">サービス・料金</a></li>
                    <li><a href="AibaContact.html">お問い合わせ</a></li>
                </ul>
            </nav>
            <a class="application-btn" href="application.html">お申込み</a>
        </div>
    </header>
        <main>
            <section id="php-confirmation" class="php-confirmation">
                    <div class="confirmation-message">
                        <p>以下のご内容でお問い合わせを受け付けました。</p>
                        <p>ご確認ください。</p>
                    </div>
    
                    <div class="confirmation">
                        <div class="post-email">
                            <p class="post-title">メールアドレス:</p>
                            <p><?php echo $_POST["email"] ?></p>
                        </div>
                        <div class="post-number">
                            <p class="post-title">お申込み番号:</p>
                            <p><?php echo $_POST["application-number"] ?></p>
                        </div>
                        
                        <div class="post-plan">
                            <p class="post-title">お申し込み予定のプラン:</p>
                            <?php if($_POST["plan"] == "AibaPlan"): ?>
                                <p>Aibaプラン</p>
                            <?php elseif($_POST["plan"] == "HurryPlan"): ?>
                                <p>お急ぎプラン</p>
                            <?php else: ?>
                                <p>-</p>
                            <?php endif; ?>
                        </div>
    
                        <div class="post-type">
                            <p class="post-title">お問い合わせの種類:</p>
                            <?php switch($_POST["type"]):case "digitalization": ?>
                                    <p>デジタル化、原本について</p>
                                    <?php break; ?> 
                            <?php case "deadline": ?>
                                    <p>納期について</p>
                                    <?php break; ?>
                            <?php case "data": ?>
                                    <p>データについて</p>
                                    <?php break; ?>
                            <?php case "shipping": ?>
                                    <p>発送について</p>
                                    <?php break; ?>
                            <?php case "support": ?>
                                    <p>お支払いについて</p>
                                    <?php break; ?>
                            <?php case "payment": ?>
                                    <p>料金について</p>
                                    <?php break; ?>
                            <?php default: ?>
                                    <p>その他</p>
                                    <?php break; ?>
                            <?php endswitch; ?>
                        </div>
                        
                        <div class="post-message">
                            <p class="post-title">お問い合わせ内容:</p>
                            <p><?php echo $_POST["message"] ?></p>
                        </div>
                    </div>
            </section>     
        </main>
    <footer>
        <nav>
            <ul>
                <li><a href="AibaContact.html">お問い合わせ</a></li>
                <li><a href="CompanyOverview.html">会社概要</a></li>
                <li><a href="TearmsOfUse.html">ご利用規約</a></li>
                <li><a href="PrivacyPolicy.html">プライバシーポリシー</a></li>
                <li><a href="SpecifiedCommercialTransactionAct.html">特定商取引法に基づく表示</a></li>
            </ul>
        </nav>
        <p>&copy; 2025 AibaAlbum</p>
    </footer>
    <script src="../js/script.js"></script>
</body>