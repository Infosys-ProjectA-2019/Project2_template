<?php //�Љ�Ώۂ̃N���X��`�C�e�[�u���ɑ������郊�X�g�̃N���X��`

class review{

	var $id; //id�̃J�����̒l
	var $obj_id; //obj_id�̃J�����̒l
	var $user_name; //user_name�̃J�����̒l
	var $score; //score�̃J�����̒l
	var $text; //text�̃J�����̒l
	//PHP�̃N���X�ł́C���̑��C�ӂ̕ϐ����t�B�[���h�ϐ��Ƃ��邱�Ƃ��ł���

	function review($arr){ //�R���X�g���N�^�i�C���X�^���X���̃^�C�~���O�Ŏ��s����郁�\�b�h�j
		foreach($arr as $k => $v) $this -> $k = $v;  //DB�̃t�B�[���h�������̂܂ܓ����̃v���p�e�B�Ƀf�[�^�̗�������
	}
}

//�Љ�Ώۂ̃I�u�W�F�N�g�����X�g�ŕێ����邽�߂̃N���X
class reviewList{
	//�v���p�e�B
	public $review_list = array();	//�N���Xintroduction_obj�̃C���X�^���X��z��ŕێ�����v���p�e�B
	//���\�b�h
	function add($arr){	//introduction_obj�^�C���X�^���X�P�����X�g�ɒǉ����郁�\�b�h
		$tmp = new review($arr);
		$this -> review_list[] = $tmp;
	}

	function getJson(){	//���݃N���X���ێ�����user���X�g��JSON�`���ŏo�͂��郁�\�b�h
		$data = json_encode($this);
		return($data);
	}
}


?>