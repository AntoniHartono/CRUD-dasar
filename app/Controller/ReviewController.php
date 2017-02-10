<?php
 
class ReviewController extends AppController
{
 
  	public $uses = array('Review');
 
	function index()
	{
	    $review = $this->Review->find('all');
	    $this->set('review', $review);
	}
 
	function tambah()
	{

	  if ($this->request->is('post') || $this->request->is('put'))
	  {
	    
	    if ($this->Review->save($this->request->data))
	    {

	      $this->Session->setFlash('Data telah disimpan.');

	      $this->redirect(array('action' => 'index'));
	    }
	  }
	}

	function ubah($id)
	{
	  $this->Review->id = $id;
	  $t=time();
	  //tambahkan kode sama seperti kode yang ada di dalam tambah()
	  if ($this->request->is('post') || $this->request->is('put') )
	  {
	    if ($this->Review->save($this->request->data))
	    {
	      $this->Session->setFlash('Data telah disimpan.');
	      $this->redirect(array('action' => 'index'));
	    }
	  }
	 
	  $this->request->data = $this->Review->read();
	  $this->render('tambah');
	}
 
	function hapus($id)
	{
	  if ($this->Review->delete($id))
	  {
	    $this->Session->setFlash('Data telah dihapus.');
	    $this->redirect(array('action' => 'index'));
	  }
	}
	}