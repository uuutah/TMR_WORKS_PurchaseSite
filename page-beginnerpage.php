<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-important">
          <div class="l-container">
            <h3 class="p-important__title">
              【お申し込みの前に】<br>
              事前にご準備いただくこと
            </h3>
            <ul class="p-important__list">
              <li class="p-important__item">
                <h4 class="p-important__itemTitle">
                  準備①<br>
                  PC本体をご準備ください。
                </h4>
                <p class="p-important__text">
                  査定対象商品のPCをご準備ください。コード類・付属品もございましたらご一緒にご用意ください。<br>
                  パソコンをより高く売るためのコツは<span><a href="<?php echo home_url(); ?>#buy-point">こちらのQ&A</a></span>に詳しく記載しています！<br>
                  Apple製品について、Apple IDのサインアウトをお願いいたします。サインアウトされていない場合、買取できない可能性がございます。
                </p>
              </li>
              <li class="p-important__item">
                <h4 class="p-important__itemTitle">
                  準備②<br>
                  本人確認書類を必ずご用意ください。
                </h4>
                <p class="p-important__text">
                  本人確認書類を査定対象商品とともにご持参またはお送りください。<br>
                  例）<br>
                  ・運転免許書のコピー(両面)<br>
                  ・健康保険証のコピー(両面)<br>
                  ・住民票の写し(原本)<br>
                  ・印鑑登録証明書(原本)等<br>
                  本人確認書類がない場合は、買取致しかねます。<br>ご了承ください。
                </p>
              </li>
            </ul>
          </div>
        </section>
        <section class="p-flow">
          <div class="l-container">
            <div class="c-titleBox">
              <div class="c-titleBox__wrapper">
                <h3 class="c-titleBox__title">&#128304;買取の流れについて&#128304;</h3>
              </div>
            </div>
            <ul class="p-flow__list breadcrumb">
              <li class="p-flow__listItem">
                <h4 class="p-flow__listTitle">
                  店頭買取
                </h4>
                <ul class="p-flow__wrapper">
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--first">
                      <span class="p-flow__number">1</span>
                      <p class="p-flow__listText ">
                        店頭にお持ち込み
                      </p>
                    </div>
                    <div class="p-flow__listImg">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-shop.png" alt="">
                    </div>
                  </li>
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--second">
                      <span class="p-flow__number">2</span>
                      <p class="p-flow__listText">
                        買取申込書にご記入と本人確認書類のご提示をお願いいたします。
                        店舗内でコピーを取らせていただきます。
                      </p>
                    </div>
                    <div class="p-flow__box">
                      <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/individualpurchaserequestform.pdf" download="individualpurchaserequestform.pdf" class="c-btn p-flow__btn">【個人用】買取依頼書<br class="p-flow__linefeed">&#40;PDF&#41;をダウンロード</a>
                      <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/corporationpurchaserequestform.pdf" download="corporationpurchaserequestform.pdf" class="c-btn p-flow__btn">【法人用】買取依頼書<br class="p-flow__linefeed">&#40;PDF&#41;をダウンロード</a>
                    </div>
                  </li>
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--third">
                      <span class="p-flow__number">3</span>
                      <p class="p-flow__listText">
                        原則、その場で査定いたします。持込点数によってはお時間がかかってしまう場合もございます。
                      </p>
                    </div>
                    <div class="p-flow__listImg">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-assessment.jpg" alt="">
                    </div>
                  </li>
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--forthLinefeed">
                      <span class="p-flow__number">4</span>
                      <p class="p-flow__listText">
                        査定終了後、現金にてお支払いいたします。
                        お支払い金額が5万円以上の場合はお振込いたします。
                      </p>
                    </div>
                    <div class="p-flow__listImg">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-payment.jpg" alt="">
                    </div>
                  </li>
                </ul>
              </li>
              <li class="p-flow__listItem">
                <h4 class="p-flow__listTitle">
                  郵送買取
                </h4>
                <ul class="p-flow__wrapper">
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--first">
                      <span class="p-flow__number">1</span>
                      <p class="p-flow__listText--large ">
                        まずはお気軽にお問合せください。
                        <a class="p-flow__link" href="<?php echo home_url("shop"); ?>">店舗一覧</a><br>
                        事前簡易査定いたします。
                        お申込後、当社で集荷を手配いたします。
                      </p>
                    </div>
                    <div class="p-flow__listImg">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-contact.png" alt="">
                    </div>
                  </li>
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--second">
                      <span class="p-flow__number">2</span>
                      <p class="p-flow__listText--large">
                        買取申込書、本人確認書類のコピーをご用意ください。
                        査定後必ず連絡が取れるように記入お願いいたします。
                      </p>
                    </div>
                    <div class="p-flow__listImg">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-application.png" alt="">
                    </div>
                  </li>
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--thirdLinefeed">
                      <span class="p-flow__number">3</span>
                      <p class="p-flow__listText--large">
                        商品を梱包し、本人確認書類と申込書を同梱の上発送をお願いいたします。
                      </p>
                    </div>
                    <div class="p-flow__listImg">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-shipping.png" alt="">
                    </div>
                  </li>
                </ul>
                <ul class="p-flow__wrapper">
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--forth">
                      <span class="p-flow__number">4</span>
                      <p class="p-flow__listText--large">
                        商品到着後、すぐに査定いたします。
                      </p>
                    </div>
                    <div class="p-flow__listImg">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-assessment.jpg" alt="">
                    </div>
                  </li>
                  <li class="p-flow__listBox">
                    <div class="p-flow__textWrapper--fifth">
                      <span class="p-flow__number">5</span>
                      <p class="p-flow__listText--large">
                        査定完了後、お電話でご連絡いたします。ご了承後、ご指定の銀行口座にお振込いたします。
                      </p>
                    </div>
                    <div class="p-flow__listImg">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow-tel.jpg" alt="">
                    </div>
                  </li>
                </ul>
              </li>
              <li class="p-flow__listItem">
                  <h4 class="p-flow__listTitle">
                    出張買取
                  </h4>
                  <div class="p-flow__wrapper">
                    <p class="p-flow__text">
                      原則5台以上で出張買取に伺います！
                      詳しくはお近くの店舗にお問合せください。店舗一覧は<span><a href="<?php echo home_url("/shop"); ?>">こちら</a></span>
                    </p>
                  </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="p-attention">
          <div class="l-container">
            <div class="p-attention__wrapper">
              <div class="c-titleBox">
                <div class="c-titleBox__wrapper">
                  <h3 class="c-titleBox__title">データの<br class="p-attention__linefeed">お取り扱いについて</h3>
                </div>
              </div>
              <div class="p-attention__box">
                <ul class="p-attention__list">
                  <li class="p-attention__listItem">
                    パソコンに含まれるデータは、法律に基づき事前に<br>お客様ご自身で消去してからお送りください。
                  </li>
                  <li class="p-attention__listItem">
                    買取したパソコンのデータは全て、販売前に適切に消去しています。<br>
                    データ消去証明書は事前にお申し込みいただけましたら発行可能です。（1台3,300円税込）
                </ul>
                <div class="p-attention__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/data.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="p-attention__wrapper">
              <div class="c-titleBox">
                <div class="c-titleBox__wrapper">
                  <h3 class="c-titleBox__title">注意事項</h3>
                </div>
              </div>
              <ul class="p-attention__listSub">
                <li class="p-attention__listItem">
                  当社から査定結果をご連絡した日から7日を経過してもご本人様からご回答がない場合は、査定結果を承諾したものとみなし、お支払い手続きをいたします。
                </li>
                <li class="p-attention__listItem">
                  口座情報の誤りがあり、お振込ができない場合かつ30日以内にご連絡がない場合は当店からのお支払いを放棄したものといたします。<br>
                  買取についての規約はこちらからご確認いただけます。
                </li>
                <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/termsofpurchase.pdf" download="termsofpurchase.pdf" class="c-btn p-attention__btn">買取規約（PDF）のダウンロードはこちら</a>
              </ul>
            </div>
          </div>
        </section>
      <?php get_footer(); ?>
