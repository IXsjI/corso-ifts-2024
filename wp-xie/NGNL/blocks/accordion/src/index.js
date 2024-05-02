import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

import {
    useBlockProps,
    RichText,
    InspectorControls,
    BlockControls,
    InnerBlocks
} from '@wordpress/block-editor';

import json from '../block.json';
const { name, title, description } = json;

registerBlockType(name, {
    title: title,
    description: description,
    attributes: {
        blockId: {
            type: 'string'
        },
        title: {
            type: 'string',
            defaut: 'Titolo di default'
        }
    },
    edit: (props) => {
        const {
            clientId
        } = props;

        props.setAttributes({ blockId: clientId });

        // const innerBlocksProps = useInnerBlockProps(props, {
        //     template: [
        //         ['core/heading', { placeholder: 'ciao' },]
        //     ]
        // });

        const blockProps = useBlockProps();

        return <>
            <InspectorControls
                key="settings"
                group="settings"
            >

            </InspectorControls>
            <InspectorControls
                key="styles"
                group="styles"
            >

            </InspectorControls>
            <BlockControls>

            </BlockControls>
            <details {...blockProps}>
                {/* <RichText
                    tagName="summary"
                    value={props.attributes.title}
                    onChange={(title) => props.setAttributes({ title })}
                    placeholder="Titolo"
                /> */}
                <RichText
                    tagName="summary"
                    value={props.attributes.title}
                    onChange={(title) => props.setAttributes({ title })}
                    placeholder="Titolo"
                />
                <div className='accordion-content'>
                    <InnerBlocks
                        template={
                            ['core/paragraph', { placeholder: 'Inserisci del testo qui...' }]
                        }
                    />
                </div>
            </details>
        </>;
    },
    save: (props) => {
        const blockProps = useBlockProps.save({
            // id: 'block-' + props.attributes.blockId,
            // "data-autoplay": props.attributes.autoplay
        });

        return <details {...blockProps}>
            <RichText.Content tagName="summary" value={props.attributes.title} />
            <div className='accordion-content'>
                <InnerBlocks.Content />
            </div>
        </details>;
    }

});