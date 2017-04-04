<?php
class blog_model extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_blog_roll($category_name)
    {
    
    	$qry = "SELECT 
    				p.post_title,
    				p.post_excerpt,
    				p.post_content,
    				p.post_date,
    				p.guid
				FROM 
					wp_posts p
				JOIN 
					wp_term_relationships tr ON (p.ID = tr.object_id)
				JOIN 
					wp_term_taxonomy tt ON (tr.term_taxonomy_id = tt.term_taxonomy_id)
				JOIN 
					wp_terms t ON (tt.term_id = t.term_id)
				WHERE 
					p.post_type='post'
				AND 
					p.post_date < NOW()
				AND 
					p.post_status = 'publish'
				AND 
					tt.taxonomy = 'category'
				AND 
					t.name = ?
				ORDER BY 
					p.ID DESC";
				
    	$query = $this->db->query($qry, array($category_name));
    	return $query->result();
    }
   
}
?>