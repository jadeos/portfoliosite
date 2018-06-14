<?php

class User extends Doctrine_Record {

    public function setTableDefinition() {
        $this->hasColumn('username', 'string', 255, array('unique' => 'true'));
        $this->hasColumn('password', 'string', 255);
        $this->hasColumn('email', 'string', 255, array('unique' => 'true'));
        $this->hasColumn('level', 'string', 255);


    }

    public function setUp() {
        $this->setTableName('user');
        $this->actAs('Timestampable');
        $this->hasMutator('password', '_encrypt_password');
    }

    protected function _encrypt_password($value) {
        $salt = '#*seCrEt!@-*%';
        $this->_set('password', md5($salt . $value));
    }
}


