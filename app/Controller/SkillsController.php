class SkillsController extends AppController {
  public $helpers = array('Html', 'Form');

  public function index() {
    $this->set('skills', $this->Skill->find('all'));
  }
}