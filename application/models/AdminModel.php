<?php
class AdminModel extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->dbforge();
		$this->load->library('session');
	}

    public function createDB()
    {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'zone_name'=>array(
                'type'=>'VARCHAR',
                'constraint' => '100',
            ),
			'zone_time'=>array(
                'type'=>'tinyint',
                'constraint' => 3,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('timezones', TRUE);
		$insert = array(
			array('zone_name'=> 'UTC (GMT) Гринвич, Лондон, Рейкьявик, Лиссабон, Дакар','zone_time'=>0),
			array('zone_name'=> 'UTC +1	 Рим, Париж, Берлин, Осло, Мадрид, Копенгаген, Вена','zone_time'=>1),
			array('zone_name'=> 'UTC +2	 Киев, Минск, Анкара, Афины, Иерусалим, Хельсинки, София, Бухарест, Кейптаун','zone_time'=>2),
			array('zone_name'=> 'UTC +3	 Москва, Аддис-Абеба, Багдад','zone_time'=>3),
			array('zone_name'=> 'UTC +4	 Тегеран, Баку, Абу-Даби','zone_time'=>4),
			array('zone_name'=> 'UTC +5	 Душанбе, Ташкент, Карачи','zone_time'=>5),
			array('zone_name'=> 'UTC +6	 Алматы, Тюмень','zone_time'=>6),
			array('zone_name'=> 'UTC +7	 Новосибирск, Джакарта, Бангкок','zone_time'=>7),
			array('zone_name'=> 'UTC +8	 Иркутск, Пекин, Шанхай','zone_time'=>8),
			array('zone_name'=> 'UTC +9	 Токио, Сеул, Пхеньян','zone_time'=>9),
			array('zone_name'=> 'UTC +10 Канберра, Сидней, Мельбурн','zone_time'=>0),
			array('zone_name'=> 'UTC +11 Магадан','zone_time'=>11),
			array('zone_name'=> 'UTC +12 Веллингтон','zone_time'=>12),
			array('zone_name'=> 'UTC -12 Анадырь, Камчатка','zone_time'=>-12),
			array('zone_name'=> 'UTC -11 Ном (Аляска), Самоа','zone_time'=>-11),
			array('zone_name'=> 'UTC -10 Аляска, Гавайи','zone_time'=>-10),
			array('zone_name'=> 'UTC -9	','zone_time'=>-9),
			array('zone_name'=> 'UTC -8	Лос-Анджелес, Сан-Франциско, Сиэтл, Ванкувер','zone_time'=>-8),
			array('zone_name'=> 'UTC -7	Денвер, Феникс, о.Пасхи','zone_time'=>-7),
			array('zone_name'=> 'UTC -6 Гватемала','zone_time'=>-6),
			array('zone_name'=> 'UTC -5	Нью-Йорк, Вашингтон, Атланта, Оттава, Гавана, Богота, Лима','zone_time'=>-5),
			array('zone_name'=> 'UTC -4	Ла-Пас, Каракас, Галифакс','zone_time'=>-4),
			array('zone_name'=> 'UTC -3	Асунсьон, Буэнос-Айрес','zone_time'=>-3),
			array('zone_name'=> 'UTC -2	Сан-Паулу, Бразилиа','zone_time'=>-2),
			array('zone_name'=> 'UTC -1	Азорские о-ва','zone_time'=>-1),
		);
		foreach ($insert as $ins) {
			$str = $this->db->insert_string('timezones', $ins);
			$this->db->query($str);
		}
		$fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'subject'=>array(
                'type'=>'VARCHAR',
                'constraint' => '50',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('subjects', TRUE);

		$fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'subject'=>array(
                'type'=>'VARCHAR',
                'constraint' => '50',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('subjects', TRUE);
		$insert = array(
			array('subject'=> 'Английский язык'),
			array('subject'=> 'Французский язык'),
			array('subject'=> 'Немецкий язык'),
			array('subject'=> 'Итальянский язык'),
			array('subject'=> 'Испанский язык'),
			array('subject'=> 'Русский язык'),
		);
		foreach ($insert as $ins) {
			$str = $this->db->insert_string('subjects', $ins);
			$this->db->query($str);
		}

		$fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'language'=>array(
                'type'=>'VARCHAR',
                'constraint' => '50',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('languages', TRUE);
		$insert = array(
			array('language'=> 'Азербайджанский язык'),
			array('language'=> 'Албанский язык'),
			array('language'=> 'Английский язык'),
			array('language'=> 'Арабский язык'),
			array('language'=> 'Армянский язык'),
			array('language'=> 'Белорусский язык'),
			array('language'=> 'Болгарский язык'),
			array('language'=> 'Венгерский язык'),
			array('language'=> 'Вьетнамский язык'),
			array('language'=> 'Голландский язык'),
			array('language'=> 'Древнегреческий язык (Греческий Древний)'),
			array('language'=> 'Греческий (Новогреческий язык)'),
			array('language'=> 'Грузинский язык'),
			array('language'=> 'Дари (Фарси)'),
			array('language'=> 'Датский язык'),
			array('language'=> 'Иврит'),
			array('language'=> 'Испанский язык'),
			array('language'=> 'Итальянский язык'),
			array('language'=> 'Кыргызский язык'),
			array('language'=> 'Казахский язык'),
			array('language'=> 'Китайский язык'),
			array('language'=> 'Корейский язык'),
			array('language'=> 'Латинский язык (Латынь)'),
			array('language'=> 'Латышский язык (Латвийский)'),
			array('language'=> 'Литовский язык'),
			array('language'=> 'Малазийский язык'),
			array('language'=> 'Молдавский язык'),
			array('language'=> 'Монгольский язык'),
			array('language'=> 'Немецкий язык'),
			array('language'=> 'Непальский язык'),
			array('language'=> 'Нидерландский язык (Голландский)'),
			array('language'=> 'Норвежский язык'),
			array('language'=> 'Персидский язык'),
			array('language'=> 'Польский язык'),
			array('language'=> 'Португальский язык'),
			array('language'=> 'Румынский язык'),
			array('language'=> 'Русский язык'),
			array('language'=> 'Сербский язык (Сербохорватский)'),
			array('language'=> 'Словацкий язык'),
			array('language'=> 'Словенский язык'),
			array('language'=> 'Таджикский язык'),
			array('language'=> 'Тайский язык'),
			array('language'=> 'Татарский язык'),
			array('language'=> 'Турецкий язык'),
			array('language'=> 'Туркменский язык'),
			array('language'=> 'Украинский язык'),
			array('language'=> 'Узбекский язык'),
			array('language'=> 'Фарси (Дари)'),
			array('language'=> 'Финский язык'),
			array('language'=> 'Фламандский язык'),
			array('language'=> 'Французский язык'),
			array('language'=> 'Хинди'),
			array('language'=> 'Хорватский язык (Сербохорватский)'),
			array('language'=> 'Чешский язык'),
			array('language'=> 'Шведский язык'),
			array('language'=> 'Эстонский язык'),
			array('language'=> 'Японский язык'),
		);
		foreach ($insert as $ins) {
			$str = $this->db->insert_string('languages', $ins);
			$this->db->query($str);
		}

		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'uni_degree'=>array(
				'type'=>'VARCHAR',
				'constraint' => '50',
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('uni_degrees', TRUE);
		$insert = array(
			array('uni_degree'=> 'нет'),
			array('uni_degree'=> 'Кандидат наук'),
			array('uni_degree'=> 'Доктор наук'),
		);
		foreach ($insert as $ins) {
			$str = $this->db->insert_string('uni_degrees', $ins);
			$this->db->query($str);
		}

		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'specialization'=>array(
				'type'=>'VARCHAR',
				'constraint' => '50',
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('specializations', TRUE);
		$insert = array(
			array('specialization'=> 'Разговорный язык'),
			array('specialization'=> 'ГИА, ОГЭ'),
			array('specialization'=> 'ЕГЭ'),
			array('specialization'=> 'Подготовка к экзаменам'),
			array('specialization'=> 'Язык с нуля'),
			array('specialization'=> 'Деловой язык'),
			array('specialization'=> 'Туризм'),
			array('specialization'=> 'Для учёбы за рубежом'),
			array('specialization'=> 'Грамматика'),
			array('specialization'=> 'Повышение успеваемости'),
			array('specialization'=> 'Помощь при выполнении домашнего задания'),
			array('specialization'=> 'Подготовка к Международным экзаменам'),
			array('specialization'=> 'Подготовка к олимпиаде'),
		);
		foreach ($insert as $ins) {
			$str = $this->db->insert_string('specializations', $ins);
			$this->db->query($str);
		}
		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'age'=>array(
				'type'=>'VARCHAR',
				'constraint' => '50',
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('ages', TRUE);
		$insert = array(
			array('age'=> 'Начальная школа (1-4 класс)'),
			array('age'=> 'Средняя школа (5-9 класс)'),
			array('age'=> 'Старшая школа (10-11 класс)'),
			array('age'=> 'Студент'),
			array('age'=> 'Взрослый'),
		);
		foreach ($insert as $ins) {
			$str = $this->db->insert_string('ages', $ins);
			$this->db->query($str);
		}
		$fields = array(
			'id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'level'=>array(
				'type'=>'VARCHAR',
				'constraint' => '50',
			),
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('levels', TRUE);
		$insert = array(
			array('level'=> 'Начинающий'),
			array('level'=> 'Средний'),
			array('level'=> 'Выше среднего'),
			array('level'=> 'Продвинутый'),
		);
		foreach ($insert as $ins) {
			$str = $this->db->insert_string('levels', $ins);
			$this->db->query($str);
		}
		$table = 'CREATE TABLE repetitors(
			id int not null auto_increment primary key,
			email varchar(128) NOT NULL UNIQUE,
			password varchar(128) NOT NULL,
			last_name varchar(64) DEFAULT NULL,
			first_name varchar(64) DEFAULT NULL,
			father_name varchar(64) DEFAULT NULL,
			tzone_id int unsigned DEFAULT NULL,
			foreign key (tzone_id) references timezones(id) on update cascade,
			skype varchar(128) DEFAULT NULL,
			university varchar(128) DEFAULT NULL,
			uni_year year DEFAULT NULL,
			specialty varchar(128) DEFAULT NULL,
			degree_id int unsigned DEFAULT NULL,
			foreign key (degree_id) references uni_degrees(id) on update cascade,
			experience tinyint unsigned DEFAULT 0,
			exp_comment varchar(1000) default NULL,
			lang_id int unsigned default null,
			foreign key (lang_id) references languages(id) on update cascade,
			about varchar(1000) default NULL,
			avatar varchar(256) default NULL,
			link  varchar(512) default NULL,
			yandex varchar (64) default NULL,
			paypal varchar (64) default NULL,
			activity tinyint default 0,
			status tinyint default 0,
			reight tinyint default 0,
			balance int unsigned default 0,
			phone varchar (20) default NULL,
			subject1 int(5) unsigned default NULL,
			subject2 int(5) unsigned default NULL,
			doc1 varchar (256) default NULL,
			doc2 varchar (256) default NULL,
			created_at timestamp,
			visit_at timestamp,
			foreign key (subject1) references subjects(id) on update cascade,
			foreign key (subject2) references subjects(id) on update cascade
		)default charset=utf8';
		$this->db->query($table);
		$table = 'CREATE TABLE students(
			id int not null auto_increment primary key,
			email varchar(128) NOT NULL UNIQUE,
			password varchar(128) NOT NULL,
			last_name varchar(64) DEFAULT NULL,
			first_name varchar(64) DEFAULT NULL,
			father_name varchar(64) DEFAULT NULL,
			tzone_id int unsigned DEFAULT NULL,
			foreign key (tzone_id) references timezones(id) on update cascade,
			skype varchar(128) DEFAULT NULL,
			avatar varchar(256) default NULL,
			status tinyint default 0,
			phone varchar (20) default NULL,
			created_at timestamp,
			visit_at timestamp,
			balance int unsigned default 0
		)default charset=utf8';
		$this->db->query($table);
		$table = 'CREATE TABLE exercises(
				id int not null auto_increment primary key,
				date_from timestamp DEFAULT NULL,
				date_accept timestamp DEFAULT NULL,
				created_at timestamp DEFAULT NULL,
				deleted_at timestamp DEFAULT NULL,
				pay_at timestamp DEFAULT NULL,
				sstart_at timestamp DEFAULT NULL,
				rstart_at timestamp DEFAULT NULL,
				cancel_at timestamp DEFAULT NULL,
				cost int unsigned default 0,
				student_id int DEFAULT NULL,
				CONSTRAINT FK_ExSt foreign key (student_id) references students(id) on update cascade,
				repetitor_id int DEFAULT NULL,
				CONSTRAINT FK_ExRep foreign key (repetitor_id) references repetitors(id) on update cascade,
				subject_id int(5) unsigned DEFAULT NULL,
				CONSTRAINT FK_ExSub foreign key (subject_id) references subjects(id) on update cascade,
				specialization_id int(5) unsigned DEFAULT NULL,
				CONSTRAINT FK_Sp foreign key (specialization_id) references specializations(id) on update cascade,
				about varchar(1024) default null,
				deleted tinyint default 0
			)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE chats(
					id int not null auto_increment primary key,
					created_at timestamp,
					from_role tinyint,
					from_id int(10) default 0,
					to_role tinyint,
					to_id int(10) default 0,
					message varchar(1024)
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE queue(
					id int not null auto_increment primary key,
					created_at timestamp,
					done_at timestamp,
					type tinyint,
					type_id int unsigned,
					is_done tinyint default 0
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE balance_adds(
					id int not null auto_increment primary key,
					cost int,
					created_at timestamp,
					student_id int,
					type varchar(256) default NULL,
					foreign key (student_id) references students(id) on update cascade
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE salaries(
					id int not null auto_increment primary key,
					cost int,
					created_at timestamp,
					done_at timestamp,
					repetitor_id int DEFAULT NULL,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					is_done tinyint default 0
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE ratings(
					id int not null auto_increment primary key,
					rating tinyint,
					created_at timestamp,
					repetitor_id int DEFAULT NULL,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					student_id int,
					foreign key (student_id) references students(id) on update cascade
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE favorites(
					id int not null auto_increment primary key,
					created_at timestamp,
					repetitor_id int DEFAULT NULL,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					student_id int,
					foreign key (student_id) references students(id) on update cascade
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE free_apps(
					id int not null auto_increment primary key,
					date_from timestamp,
					date_to timestamp,
					created_at timestamp,
					deleted_at timestamp,
					cancel_at timestamp,
					cost int unsigned default 0,
					student_id int,
					foreign key (student_id) references students(id) on update cascade,
					subject_id int(5) unsigned DEFAULT NULL,
					foreign key (subject_id) references subjects(id) on update cascade,
					specialization_id int(5) unsigned DEFAULT NULL,
					foreign key (specialization_id) references specializations(id) on update cascade,
					about varchar(1024) default null,
					deleted tinyint default 0
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE balance(
					id int not null auto_increment primary key,
					balance int
				)default charset=utf8';
			$this->db->query($table);
			$this->db->query('insert into balance (balance) values (0)');
			$table = 'CREATE TABLE documents(
					id int not null auto_increment primary key,
					repetitor_id int DEFAULT NULL,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					document varchar(512)
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE rsa(
					id int not null auto_increment primary key,
					subject_id int(5) unsigned,
					foreign key (subject_id) references subjects(id) on update cascade,
					repetitor_id int,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					age_id int(5) unsigned,
					foreign key (age_id) references ages(id) on update cascade
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE rsl(
					id int not null auto_increment primary key,
					subject_id int(5) unsigned,
					foreign key (subject_id) references subjects(id) on update cascade,
					repetitor_id int,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					level_id int(5) unsigned,
					foreign key (level_id) references levels(id) on update cascade
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE rss(
					id int not null auto_increment primary key,
					subject_id int(5) unsigned,
					foreign key (subject_id) references subjects(id) on update cascade,
					repetitor_id int,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					specialization_id int(5) unsigned DEFAULT NULL,
					foreign key (specialization_id) references specializations(id) on update cascade
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE rsp(
					id int not null auto_increment primary key,
					subject_id int(5) unsigned,
					foreign key (subject_id) references subjects(id) on update cascade,
					repetitor_id int,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					cost int unsigned default 0
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE free_rs(
					id int not null auto_increment primary key,
					created_at timestamp,
					repetitor_id int,
					foreign key (repetitor_id) references repetitors(id) on update cascade,
					free_id int,
					foreign key (free_id) references free_apps(id) on update cascade
				)default charset=utf8';
			$this->db->query($table);
			$table = 'CREATE TABLE other(
					id int not null auto_increment primary key,
					name varchar (128),
					sense varchar (128)
				)default charset=utf8';
			$this->db->query($table);
			$ins = array('name'=>'admin_password', 'sense'=>'1111');
			$str = $this->db->insert_string('other', $ins);
			$this->db->query($str);
		return 'DB created';
    }

	public function createTable()
	{
		$table = 'CREATE TABLE other(
				id int not null auto_increment primary key,
				name varchar (128),
				sense varchar (128)
			)default charset=utf8';
		$this->db->query($table);
		return 'table created';
	}

	public function seed()
	{
		$ins = array('name'=>'admin_password', 'sense'=>'1111');
		$str = $this->db->insert_string('other', $ins);
		$this->db->query($str);
		return 'table seeded';
	}

	public function login($pass)
	{
		$q = $this->db->query('select sense from other where sense="'.$pass.'" and name="admin_password"');
		$r = $q->result_array();
		if (count($r) == 0){
			throw new Exception('неправильный логин/пароль');
		} else{
			$this->session->set_userdata('admin', 'admin');
			return '0';
		}
	}

	public function getAllRepetitors()
	{
		$q = $this->db->query('select * from repetitors');
		$repetitors = $q->result_array();
		for($i = 0; $i < count($repetitors); $i++){
			if ($repetitors[$i]['subject1']){
				$sub = $repetitors[$i]['subject1'];
				$q = $this->db->query('select subject from subjects where id='.$sub);
				$row = $q->result_array();
				$repetitors[$i]['subject1'] = $row[0]['subject'];
			}
			if ($repetitors[$i]['subject2']){
				$sub = $repetitors[$i]['subject2'];
				$q = $this->db->query('select subject from subjects where id='.$sub);
				$row = $q->result_array();
				$repetitors[$i]['subject2'] = $row[0]['subject'];
			}
		}
		return $repetitors;
	}

	public function getAllStudents()
	{
		$q = $this->db->query('select * from students');
		$students = $q->result_array();
		for($i = 0; $i < count($students); $i++){

		}
		return $students;
	}

	public function setRepetitorStatus($id, $status)
	{
		$this->db->where('id', $id);
		$this->db->update('repetitors', array('status'=>$status));
		return 0;
	}

	public function setStudentStatus($id, $status)
	{
		$this->db->where('id', $id);
		$this->db->update('students', array('status'=>$status));
		return 0;
	}

	public function getUsers()
	{
		$users = array();
		$sel = 'select id, first_name, father_name, last_name from repetitors';
		$q = $this->db->query($sel);
		$row = $q->result_array();
		foreach ($row as $r) {
			$data[] = array(
				'id' => $r['id'],
				'first_name' => (is_null($r['first_name'])) ? '' : $r['first_name'],
				'last_name' => (is_null($r['last_name'])) ? '' : $r['last_name'],
				'father_name' => (is_null($r['father_name'])) ? '' : $r['father_name'],
				'role' =>1,
			);
		}
		$sel = 'select id, first_name, father_name, last_name from students';
		$q = $this->db->query($sel);
		$row = $q->result_array();
		foreach ($row as $r) {
			$data[] = array(
				'id' => $r['id'],
				'first_name' => (is_null($r['first_name'])) ? '' : $r['first_name'],
				'last_name' => (is_null($r['last_name'])) ? '' : $r['last_name'],
				'father_name' => (is_null($r['father_name'])) ? '' : $r['father_name'],
				'role' =>2,
			);
		}
		return $data;
	}
}
