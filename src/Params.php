<?php
class Params {
        //Filters
        public function get($param) {
            $this->param = array_merge($param, $this->param);
            return $this;
        }
    
        public function section ($section) {
            $this->param['section'] = $section;
            return $this;
        }
    
        public function search ($search) {
            $this->param['q'] = $search;
            return $this;
        }
    
        public function format ($format) {
            $this->param['format'] = $format;
            return $this;
        }

        public function call_back ($call_back) {
            $this->param['callback'] = $call_back;
            return $this;
        }

        public function query_fields ($query_fields) {
            $this->param['query-fields'] = $query_fields;
            return $this;
        }

        public function reference ($reference) {
            $this->param['reference'] = $reference;
            return $this;
        }

        public function reference_type ($reference_type) {
            $this->param['reference-type'] = $reference_type;
            return $this;
        }

        public function tags ($tags) {
            $this->param['tags'] = $tags;
            return $this;
        }

        public function rights ($rights) {
            $this->param['rights'] = $rights;
            return $this;
        }

        public function ids ($ids) {
            $this->param['ids'] = $ids;
            return $this;
        }

        public function production_office ($production_office) {
            $this->param['production-office'] = $production_office;
            return $this;
        }

        public function lang ($lang) {
            $this->param['lang'] = $lang;
            return $this;
        }

        public function star_rating ($star_rating) {
            $this->param['star-rating'] = $star_rating;
            return $this;
        }

        //Dates
        public function from_date ($from_date) {
            $this->param['from-date'] = $from_date;
            return $this;
        }

        public function to_date ($to_date) {
            $this->param['to-date'] = $to_date;
            return $this;
        }

        public function use_date ($use_date) {
            $this->param['use-date'] = $use_date;
            return $this;
        }

        //Pages
        public function page ($page) {
            $this->param['page'] = $page;
            return $this;
        }

        public function page_size ($page_size) {
            $this->param['page-size'] = $page_size;
            return $this;
        }

        //Ordering
        public function order_by ($order_by) {
            $this->param['order-by'] = $order_by;
            return $this;
        }

        public function order_date ($order_date) {
            $this->param['order-date'] = $order_date;
            return $this;
        }

        //Show Fields
        public function show_fields ($show_fields) {
            $this->param['show-fields'] = $show_fields;
            return $this;
        }

        //Show Tags
        public function show_tags ($show_tags) {
            $this->param['show-tags'] = $show_tags;
            return $this;
        }

        //Show Section
        public function show_section ($show_section) {
            $this->param['show-section'] = $show_section;
            return $this;
        }

        //Show Blocks
        public function show_blocks ($show_blocks) {
            $this->param['show-blocks'] = $show_blocks;
            return $this;
        }

        //Show Elements
        public function show_elements ($show_elements) {
            $this->param['show-elements'] = $show_elements;
            return $this;
        }

        //Show references
        public function show_references ($show_references) {
            $this->param['show-references'] = $show_references;
            return $this;
        }

        //Show Rights
        public function show_rights ($show_rights) {
            $this->param['show-rights'] = $show_rights;
            return $this;
        }

        //Others
        public function web_title ($web_title) {
            $this->param['web-title'] = $web_title;
            return $this;
        }
    }
?>