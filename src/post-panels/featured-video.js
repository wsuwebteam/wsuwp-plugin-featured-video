import { registerPlugin } from '@wordpress/plugins';

import FeaturedVideo from '../controls/featured-video';

registerPlugin( 'featured-video', {
    render() {
        return( <FeaturedVideo /> );
    }
} );
