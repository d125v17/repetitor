<?php $this->load->view('main/header'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.min.css">
<script src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
<title>Репетиторы по разным языкам. Профиль репетитора</title>
</head>
<body>
<?php $this->load->view('repetitor/header_menu'); ?>
<section class="start-profile">
    <h1>Приветствуем Вас на странице «Настройка профиля»!</h1>
    <ul>
        <li>Для того чтобы стать нашим репетитором, Вам осталось сделать несколько шагов.</li>
        <li>Заполните все поля во вкладках и отправьте запрос на активацию профиля.</li>
        <li>После подачи заявки, профиль попадает на рассмотрение к методисту. В первую очередь рассматриваются максимально заполненные профили.</li>
        <li>При положительном результате ответ об активности профиля Вы получите на указанный Вами адрес электронной почты или сможете проверить в личном кабинете через 24 часа после подачи заявки.</li>
    </ul>
</section>
<main class="rep-profile">
    <section class="menu">
        <ul>
            <li><a href="#" class="active" id="personal-but">Личные данные</a></li>
            <li><a href="#" id="subject-but">Предмет</a></li>
            <li><a href="#" id="edu-but">Образование и опыт</a></li>
            <li><a href="#" id="docs-but">Документы</a></li>
            <li><a href="#" id="present-but">Презентация</a></li>
            <li><a href="#" id="pay-but">Реквизиты</a></li>
            <li><a href="#" id="status-but">Состояние профиля</a></li>
        </ul>
    </section>
    <section class="warp">
        <aside id="personal">
            <form method="post">
                <div>
                    <input type="text" name="first_name" placeholder="Имя*">
                    <input type="text" name="last_name" placeholder="Фамилия*">
                    <input type="text" name="father_name" placeholder="Отчество">
                </div>
                <div>
                    <select name="tzone">
                        <?php
                            foreach ($tzones as $option) {
        						echo '<option value="'.$option['id'].'">'.$option['zone_name'].'</option>';
                            }
                        ?>
                    </select>
                    <input type="text" name="phone" placeholder="Телефон">
                    <input type="text" name="skype" placeholder="Логин Skype*">
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email*">
                    <input type="text" name="password" placeholder="Пароль*">
                    <input type="text" name="password" placeholder="Подтверждение пароля*">
                </div>
                <button type="submit" name="button">Сохранить</button>
            </form>
        </aside>
        <aside id="present">
            <div class="avatar">
                <div class="img">
                    <img src="<?php echo base_url(); ?>img/avatar3.png" alt="empty avarat" style="padding-top: 30px">
                </div>
                <p>
                    *Загрузите вашу фотографию* (JPG, PNG, не менее 200*200 px.)
                </p>
                <button type="button" name="button">Загрузить фото</button>
            </div>
            <div class="info">
                <p>
                    Напишите кратко основную информацию о себе*<br>
                    (презентация отображается посетителям сайта)
                </p>
                <textarea name="name" placeholder="До 400 символов"></textarea>
                <p>
                    Разместите ссылку на вашу видео-презентацию.(1-3 минуты)
                </p>
                <input type="text" placeholder="https://www.youtube.com/...">
                <button type="submit" name="button">Сохранить</button>
            </div>
        </aside>
        <aside id="subject">
            <div>
                <div>
                    <select name="">
                        <option value="0">Предмет*</option>
                        <?php
                            foreach ($subjects as $option) {
                                echo '<option value="'.$option['id'].'">'.$option['subject'].'</option>';
                            }
                        ?>
                    </select>
                    <button></button>
                    <select name="" id="">
                        <option value="0">Родной язык*</option>
                        <?php
                        foreach ($languages as $option) {
                                echo '<option value="'.$option['id'].'">'.$option['language'].'</option>';
                            }
                        ?>
                    </select>
                    <h2>Возрастные группы*<small>(выберите минимум 1 пункт)</small></h2>
                        <?php
                        foreach ($ages as $inp) {
                            echo '<label>';
                                echo '<input value="'.$inp['id'].'" name="age[]" type="checkbox">';
                                echo '<span></span> ';
                                echo $inp['age'];
                                echo "</label>";
                            }
                        ?>
                </div>
                <div>
                    <h2>Уровень владения языка учеником*<br><small>(выберите минимум 1 пункт)</small></h2>
                        <?php
                        foreach ($levels as $inp) {
                                echo '<label>';
                                echo '<input value="'.$inp['id'].'" name="level[]" type="checkbox">';
                                echo '<span></span> ';
                                echo $inp['level'];
                                echo "</label>";
                            }
                        ?>
                    <h2>Ваша цена за 1 час (50 мин.) в $*</h2>
                    <div>
                        <input type="text" placeholder="Ваша сумма, $">
                        + наш % =
                        <input type="text" placeholder="Для ученика, $">
                    </div>
                </div>
                <div>
                    <h2>Специализация*<small>(выберите минимум 1 пункт)</small></h2>
                        <div>
                         <?php
                        for ($i=0; $i < 8; $i++) {
                            echo '<label>';
                            echo '<input value="'.$specializations[$i]['id'].'" name="specialization[]" type="checkbox">';
                            echo '<span></span> ';
                            echo $specializations[$i]['specialization'];
                            echo "</label>";
                        }
                        echo '</div><div>';
                        for ($i=8; $i < count($specializations); $i++) {
                            echo '<label>';
                            echo '<input value="'.$specializations[$i]['id'].'" name="specialization[]" type="checkbox">';
                            echo '<span></span> ';
                            echo $specializations[$i]['specialization'];
                            echo "</label>";
                        }
                        ?>
                        </div>
                </div>
            </div>
                        <button type="submit" name="button">Сохранить</button>
        </aside>
        <aside id="pay">
            <div>
                <h2>Выберите один из вариантов. На данные реквизиты будут выводиться ваши заработанные средства, по запросу.</h2>
                <h3>(Внимательно проверьте правильность внесённых данных! Вы несёте полную ответственность за не верно внесённые персональные данные!)</h3>
                <label>
                    <span class="img"><img src="<?php echo base_url(); ?>img/yandex.png" alt="yandex"></span>
                    <input type="text" placeholder="номер кошелька">
                    <span class="check"></span>
                </label>
                <label>
                    <span class="img"><img src="<?php echo base_url(); ?>img/paypal.png" alt="paypal"></span>
                    <input type="text" placeholder="аккаунт">
                    <span class="check"></span>
                </label>
            </div>
            <button type="submit" name="button">Сохранить</button>
        </aside>
        <aside id="edu">
            <div>
                <div class="vuz">
                    <input type="text" name="" placeholder="ВУЗ (напишите полное название)">
                    <input type="text" name="" value="" placeholder="Специальность">
                </div>
                <div class="deg">
                    <select class="" name="">
                        <option value="0">Ученая степень</option>
                        <?php
                        foreach ($uni_degrees as $option) {
                                echo '<option value="'.$option['id'].'">'.$option['uni_degree'].'</option>';
                            }
                        ?>
                    </select>
                    <select class="" name="">
                        <option value="0">Опыт работы репетитором (лет)</option>
                        <?php
                        for ($i=0;$i<=50;$i++){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                         ?>
                    </select>
                </div>
                <div class="year">
                    <select class="" name="">
                        <option value="0">Год окончания</option>
                        <?php
                        $year = date('Y');
                        for ($i = date('Y'); $i >= 1965; $i--){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                         ?>
                    </select>
                </div>
            </div>
            <div>
                <textarea placeholder="Опыт преподавания (до 400 символов)"></textarea>
            </div>
            <button type="submit" name="button">Сохранить</button>
        </aside>
        <aside id="docs">
            <div class="header">
                <h3>Загрузите скан (электронную копию) вашего диплома об образовании (JPG, PNG)</h3>
                <h3>Загрузите скан (электронную копию) иного документа (сертификат, грамота и т.д.), подтверждающего ваши компетенции, как преподавателя (JPG, PNG)</h3>
            </div>
            <div class="doc">

                <button id="load1">Загрузить</button>
                <?php echo form_open_multipart('main/upload2', array('id' => 'file_form1' ));?>
                    <input type="file" name="userfile" size="20" id="add-file1" class="hidden">
                </form>
                <div class="img"  id="load_block1">

                </div>
            </div>
            <div class="doc">

                <button id="load2">Загрузить</button>
                <?php echo form_open_multipart('main/upload2', array('id' => 'file_form2' ));?>
                    <input type="file" name="userfile" size="20" id="add-file2" class="hidden">
                </form>
                <div class="img" id="load_block2">

                </div>
            </div>
            <button type="submit" name="button">Сохранить</button>
        </aside>
        <aside id="status">
            <div>
                <h3>Состояния профиля по умолчанию</h3>
                <p><span class="check"></span>На рассмотрении</p>
                <h3>Вы можете изменить состояние профиля</h3>
                <label><input type="checkbox" name="" value=""><span></span> Не активен (не отображается на сайте)</label>
                <label><input type="checkbox" name="" value=""><span></span> Удалить профиль с сайта</label>
                <button type="submit" name="button">Сохранить</button>
            </div>
        </aside>
    </section>
</main>
<a href="#" class="send-rep-profile">Отправить запрос на активацию профиля</a>

<script src="<?php echo base_url(); ?>js/repetitor/profile.js"></script>
<?php $this->load->view('main/footer'); ?>
